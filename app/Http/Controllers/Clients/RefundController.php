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
        $user = auth()->guard('web')->user();

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


    public function detailOrderForComplain($identifier)
    {
        $user = auth()->guard('web')->user();

        $order = Order::where('payment_identifier', $identifier)
            ->where(function ($query) {
                $query->orWhere('status', 'Delivered')
                    ->orWhere('status', 'Shipped')
                    ->orWhere('status', 'Completed');
            })
            ->with([
                'address:id,person_name,district,city,phone_number,lat,long',
                'user:id,name,email',
                'order_items', 'order_items.product:id,name',
                'order_items.product.seller:id,seller_name,seller_slug,email',
                'order_items.product.parent',
                'master_account:id,name,image,type',
            ])->first();
        if (!$order)
            return redirect("/pembeli/pesananku")->with('error', 'Pesanan tidak ditemukan')->with('auth', base64_encode($user->uid));

        return view('clients.refund.detail', ['order' => $order]);
    }


    public function requestRefund(Request $request)
    {
        $request->validate([
            'returning_product_type' => 'required|in:ReturnProdukDanUang,Refund,Komplain',
        ]);
        $user = auth()->guard('web')->user();

        DB::beginTransaction();

        $refundTotal = 0;
        $order = Order::where('id', $request->id)->first();
        if (!$order instanceof Order)
            return ResponseAPI('Pesanan tidak ditemukan', 404);

            $images = [];
        if ($request->returning_product_type == 'ReturnProdukDanUang') {
            $request->validate([
                'returning_reason' => 'required',
                'returning_description' => 'required',
                'returning_images' => 'required',
                'order_items' => 'required',
                // 'order_items.*.id' => 'required',
                // 'order_items.*.quantity' => 'required',
                'returning_video' => 'required|mimes:mp4|max:10240',
            ]);

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
            $orderItems = $request->order_items;
            foreach ($orderItems as $key => $order_item) {
                if (gettype($order_item)) {
                    foreach ($order_item as $ke => $orders) {
                        $o = json_decode($orders);
                        $orderItemId = $o->id ?? null;
                        $orderItem = OrderItem::find($orderItemId);
                        if (!$orderItem) {
                            return ResponseAPI('Item pesanan tidak ditemukan', 404);
                        }
                        if ($o->quantity > $orderItem->quantity) {
                            return ResponseAPI('Jumlah item pesanan yang dikembalikan melebihi jumlah item yang dipesan', 400);
                        }

                        $orderItem->return_quantity = $o->quantity;
                        $returningItemTotal = $orderItem->price * ($o->quantity ?? 1);
                        $orderItem->return_item_total = $returningItemTotal;
                        $refundTotal += $returningItemTotal;
                        $orderItem->save();
                    }
                } else
                    return ResponseAPI('Item pesanan tidak ditemukan', 404);
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
        return response()->json([
            "status" => "success",
            "message" => "Permintaan $request->returning_product_type berhasil dikirim",
            "redirect" => route('dashboard.myOrder') . '?auth=' . base64_encode($user->uid)
        ], 200, [], JSON_UNESCAPED_SLASHES);
    }
}
