<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\OrderResource;
use App\Models\Help;
use App\Models\HistoryFund;
use App\Models\Order;
use App\Models\Setting;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class OrderDataController extends Controller
{
    public function index(Request $request)
    {
        // validation for request status in Pending, Paid, Sending, Cancel, Returning, Completed
        $request->validate([
            'status' => 'required|in:Pending,Paid,ProcessedBySeller,Sending,Cancel,Returning,Completed'
        ]);
        $user = auth()->guard('api-client')->user();

        $status = $request->input('status');
        $status = lypsisGetOrderStatusValues($status);
        // $orders = Order::withCount('order_items')->when($status, function ($query, $status) {
        $orders = Order::withCount('order_items')->where('user_id', $user->id)->when(empty($status) == false, function ($query) use ($status) {
            // return $query->where('status', $status);
            return $query->whereIn('status', $status);
        })
            ->with(['single_order_item_with_product.product.parent', 'single_order_item_with_product.product.seller'])->paginate(20);

        return OrderResource::collection($orders);
    }

    public function detail(Order $order)
    {
        $order->load(['master_account', 'order_items.product.parent', 'user.address.ro_city']);

        return new OrderResource($order);
    }

    public function tutorialPayment(Order $order)
    {
        if (isset($order->qr_string)) {
            $str = 'e wallet ' . $order->payment_channel;
            $help = Help::where('slug', Str::slug($str))->first();
        } elseif (isset($order->outlet_payment_code)) {
            $str = 'retail outlet ' . $order->payment_channel;
            $help = Help::where('slug', Str::slug($str))->first();
        } elseif (isset($order->va_number)) {
            $str = 'Virtual Account ' . $order->payment_channel;
            $help = Help::where('slug', Str::slug($str))->first();
        } else {
            $help = new Help();
            $help->name_id = '';
            $help->content_id = '';
        }
        $data['name_id'] = $help->name_id ?? '';
        $data['content_id'] = $help->content_id ?? '';

        return ResponseAPI($data, 200);
    }

    public function sellerListOrder(Request $request)
    {
        $request->validate([
            'status' => 'required|in:Pending,Paid,ProcessedBySeller,Sending,Cancel,Returning,Completed'
        ]);
        $user = auth()->guard('api-client')->user();

        $status = $request->input('status');
        $status = lypsisGetOrderStatusValues($status);

        $orders = Order::withCount('order_items')->where('seller_id', $user->id)->when(empty($status) == false, function ($query) use ($status) {
            // return $query->where('status', $status);
            return $query->whereIn('status', $status);
        })
            ->when($request->filled('search'), function ($query) use ($request) {
                $query->where('payment_identifier', 'like', "%$request->search%");
            })
            ->with(['single_order_item_with_product.product.parent', 'single_order_item_with_product.product.seller', 'user.address.ro_city'])->paginate(20);

        return OrderResource::collection($orders);
    }

    public function buyerCancelOrder(Order $order)
    {
        $order->status = Order::CANCELLED;
        $order->save();

        return ResponseAPI('Pesanan berhasil dibatalkan', 200);
    }

    public function sellerAcceptOrder(Order $order)
    {
        $order->status = Order::PROCESSED_BY_SELLER;
        $order->save();

        return ResponseAPI('Pesanan berhasil diterima', 200);
    }

    public function sellerRejectOrder(Order $order)
    {
        $order->status = Order::CANCELLED;
        $order->save();

        return ResponseAPI('Pesanan berhasil ditolak', 200);
    }

    public function sellerSendOrder(Order $order, Request $request)
    {
        $request->validate([
            'delivery_service' => 'required|in:jne,jnt,sicepat,anteraja',
            'delivery_receipt_number' => 'required|string',
        ]);

        $orderController    = new OrderController();

        $requestNew = new Request();
        $requestNew->replace([
            'delivery_service' => $request->delivery_service,
            'delivery_receipt_number' => $request->delivery_receipt_number,
            'just_json' => true,
        ]);
        // TODOS : Uncomment This
        // $orderController->waybillCheck($requestNew);
        $order->delivery_receipt_number = $request->delivery_receipt_number;
        $order->status = Order::SHIPPED;
        $order->save();


        // receipt image
        // exec("wkhtmltoimage --format png $html $output");

        return ResponseAPI('Pesanan berhasil dikirim', 200);
    }

    public function checkStatusDeliveredOrder(Order $order)
    {

        // TODOS : Call Waybill check if not error property delivered == true
        $dateFromDelivery = now();

        if ($order->status == Order::SHIPPED) {
            $order->status = Order::DELIVERED;
            $order->delivered_at = $dateFromDelivery;
            $order->save();
        }

        return ResponseAPI('Pesanan telah sampai ketujuan', 200);
    }

    public function completedOrder(Order $order)
    {

        if (in_array($order->status, [Order::SHIPPED, Order::DELIVERED])) {
            $order->status = Order::COMPLETED;
        } else {
            return ResponseAPI('Status Pesanan Belum memenuhi syarat untuk selesai', 400);
        }

        $seller = $order->seller;
        $totalPrice = $order->total_final ? $order->total_final : $order->total;
        $feeCommerce = 0;
        $feeGlobalAmount = lypsisGetSetting("", [], true, ['seller_fee_amount', 'seller_fee_percent'])->toArray();
        $feeGlobalAmount = array_map('intval', $feeGlobalAmount);
        $dateFromDelivery = now();


        if ($seller->seller_fee_amount > 0) {
            $feeCommerce = $seller->seller_fee_amount;
        } else if ($seller->seller_fee_percentage > 0) {
            $feeCommerce = $totalPrice * ($seller->seller_fee_percentage / 100);
        } else if ($feeGlobalAmount[0] > 0) {
            $feeCommerce = $feeGlobalAmount[0];
        } else if ($feeGlobalAmount[1] > 0) {
            $feeCommerce = $totalPrice * ($feeGlobalAmount[1] / 100);
        }

        DB::beginTransaction();
        $totalIncome = $totalPrice - $feeCommerce;

        $order->market_fee_seller = $feeCommerce;
        $order->arrived_at = $dateFromDelivery;
        $order->save();

        $commerceBalance = Setting::where('name', 'commerce_balance')->firstOrFail();
        $theCommerceBalance = intval($commerceBalance->value);
        $commerceBalance->value = $theCommerceBalance + $feeCommerce;
        $commerceBalance->save();

        $seller->balance += $totalIncome;
        $seller->save();

        $historyFund = new HistoryFund();
        $historyFund->order_id = $order->id;
        $historyFund->user_id = $seller->id;
        $historyFund->type = "Penjualan";
        $historyFund->amount = $totalIncome;
        $historyFund->description = "Penjualan #" . $order->payment_identifier;
        $historyFund->save();

        DB::commit();
        return ResponseAPI('Pesanan berhasil diselesaikan', 200);
    }

    private function viewReceipt(Order $order)
    {
        return view('receipt_image', ['order' => $order]);
    }
}
