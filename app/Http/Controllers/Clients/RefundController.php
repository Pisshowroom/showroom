<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use App\Http\Resources\OrderResource;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Resources\HistoryFundResource;
use App\Models\HistoryFund;


class RefundController extends Controller
{

    public function indexHistoryFund(Request $request)
    {
        $user = auth()->guard('api-client')->user();

        $request->validate([
            'date' => 'nullable|date',
        ]);

        $historyFund = HistoryFund::where('user_id', $user->id)->orderBy('created_at', 'desc');

        if ($request->filled('date')) {
            $historyFund->whereDate('created_at', $request->date);
        }
        if ($request->filled('type')) {
            $historyFund->where('type', $request->type);
        }

        $historyFund =  $historyFund->paginate(10);

        return HistoryFundResource::collection($historyFund);
    }


    public function detailOrderForComplain(Order $order)
    {
        $order->load(['order_items.product.parent']);

        return new OrderResource($order);
    }


    public function requestRefund(Order $order, Request $request)
    {
        $request->validate([
            'returning_product_type' => 'required|in:ReturnProdukDanUang,Refund,Komplain',
        ]);

        DB::beginTransaction();

        $refundTotal = 0;
        if ($request->returning_product_type == 'ReturnProdukDanUang') {
            $request->validate([
                'returning_reason' => 'required',
                'returning_description' => 'required',
                'returning_images' => 'required',
                'order_items' => 'required',
                'order_items.*.id' => 'required',
                'order_items.*.return_quantity' => 'required',
                'returning_video' => 'required|mimes:mp4|max:10240',
            ]);
            $images = [];
            $order->status = Order::REQUESTED_RETURN;


            if (!empty($request->images)) {
                foreach ($request->images as $img) {
                    if (isset($img) && is_uploaded_file($img)) {
                        $images[] = uploadFoto($img, 'uploads/photos_refund_complain');
                    }
                }
            }

            $order->returning_description = $request->returning_description;
            $order->returning_images = $images;
            if (isset($request->returning_video) && is_uploaded_file($request->returning_video)) {
                $order->returning_video = uploadFile($request->returning_video, 'uploads/video_refund_complain');
            }

            $orderItems = json_decode($request->order_items, true);
            foreach ($orderItems as $order_item) {
                $orderItem = OrderItem::find($order_item['id'] ?? null);
                if (!$orderItem) {
                    return ResponseAPI('Item pesanan tidak ditemukan', 400);
                }
                $orderItem->return_quantity = $order_item['return_quantity'];
                $returningItemTotal = $orderItem->price * ($order_item['return_quantity'] ?? 1);
                $orderItem->return_item_total = $returningItemTotal;
                $refundTotal += $returningItemTotal;
                $orderItem->save();
            }
        } else if ($request->returning_product_type == 'Refund') {
            $request->validate([
                'returning_reason' => 'required',
                'returning_description' => 'required',
                'returning_images' => 'required',
                'returning_video' => 'required|mimes:mp4|max:10240',
            ]);
            $order->status = Order::REQUESTED_REFUND;

            if (!empty($request->images)) {
                foreach ($request->images as $img) {
                    if (isset($img) && is_uploaded_file($img)) {
                        $images[] = uploadFoto($img, 'uploads/photos_refund_complain');
                    }
                }
            }

            $order->returning_description = $request->returning_description;
            $order->returning_images = $images;
            if (isset($request->returning_video) && is_uploaded_file($request->returning_video)) {
                $order->returning_video = uploadFile($request->returning_video, 'uploads/video_refund_complain');
            }
            $refundTotal = $order->subtotal;
        } else if ($request->returning_product_type == 'Komplain') {
            // * TODOS: belum
            $request->validate([
                'returning_reason' => 'required',
            ]);

            $refundTotal = $order->subtotal;
            $order->status = Order::COMPLAINT;
        }

        $order->refund_total = $refundTotal;
        $order->returning_product_type = $request->returning_product_type;
        $order->returning_reason = $request->returning_reason ?? null;

        $order->save();

        DB::commit();
        return ResponseAPI("Permintaan $request->returning_product_type berhasil dikirim", 200);
    }
}
