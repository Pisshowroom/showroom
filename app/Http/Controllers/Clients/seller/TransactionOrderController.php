<?php

namespace App\Http\Controllers\Clients\seller;

use App\Http\Controllers\Api\OrderController;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;

class TransactionOrderController extends Controller
{
    public function isSeller()
    {
        return Auth::guard('web')->user()->is_seller == true;
    }
    public function allTransaction(Request $request)
    {
        if (!$this->isSeller()) {
            $user = Auth::guard('web')->user();
            return redirect('/pembeli')->with('auth', base64_encode($user->uid));
        }
        $status = $request->input('status');

        $order = Order::where('seller_id', Auth::guard('web')->user()->id)
            ->with(['order_items:id,product_id,order_id', 'order_items:id,product_id,order_id,user_id', 'order_items.product:id,name'])
            ->whereHas('order_items', function ($q) use ($request) {
                $q->whereHas('product', function ($qq) use ($request) {
                    if ($request->filled('search'))
                        $qq->where('payment_identifier', 'like', "%$request->search%");
                    $qq->where('seller_id', Auth::guard('web')->user()->id);
                });
            })
            ->select('id', 'payment_identifier', 'user_id', 'created_at', 'status', 'payment_status', 'total', 'total_final', 'seller_id', 'payment_due')
            ->when($status, function ($query, $status) {
                if ($status != 'all')
                    return $query->where('status', $status);
            })->orderBy('id', $request->orderBy ?? 'desc')->paginate($request->per_page ?? 10);
        foreach ($order as $key => $value) {
            if (now() > $value->payment_due)
                $value->expired = true;
            else
                $value->expired = false;
            $value->date = parseDates($value->created_at);
        }
        return view('clients.seller.transaction.all', ['orders' => $order]);
    }
    public function sendResi($identifier)
    {
        if (!$this->isSeller()) {
            $user = Auth::guard('web')->user();
            return redirect('/pembeli')->with('auth', base64_encode($user->uid));
        }
        $order = Order::where('payment_identifier', $identifier)->firstOrFail();
        // $order = Order::where('payment_identifier', $identifier)->where('status', 'ProcessedBySeller')->firstOrFail();
        return view('clients.seller.transaction.send_resi', ['order' => $order]);
    }
    public function detailTransaction($identifier)
    {
        if (!$this->isSeller()) {
            $user = Auth::guard('web')->user();
            return redirect('/pembeli')->with('auth', base64_encode($user->uid));
        }
        $order = Order::where('payment_identifier', $identifier)
            ->with([
                'address:id,person_name,district,city,phone_number,lat,long',
                'user:id,name,email', 'order_items',
                'order_items.product:id,name,seller_id,images,slug',
                'master_account:id,name,image,type'
            ])->firstOrFail();
        if (now() > $order->payment_due)
            $order->expired = true;
        else
            $order->expired = false;
        $order->date = parseDates($order->created_at);
        $order->date_paid_at = $order->paid_at ? parseDates($order->paid_at) : '-';
        $order->date_packing_due = $order->packing_due ? parseDates($order->packing_due) : '-';
        $order->date_delivered_at = $order->delivered_at ? parseDates($order->delivered_at) : '-';
        $order->date_arrived_at = $order->arrived_at ? parseDates($order->arrived_at) : '-';
        return view('clients.seller.transaction.detail', ['order' => $order]);
    }

    // seller approve / reject
    public function sellerAcceptOrder($id)
    {
        $user = Auth::guard('web')->user();

        $order = Order::findOrFail($id);
        $order->status = Order::PROCESSED_BY_SELLER;
        $order->save();
        return redirect("/toko/semua-transaksi")->with('success', 'Pesanan berhasil diterima')->with('auth', base64_encode($user->uid));
    }

    public function sellerRejectOrder($id)
    {
        $user = Auth::guard('web')->user();

        $order = Order::findOrFail($id);
        $order->status = Order::CANCELLED;
        $order->save();

        return redirect("/toko/semua-transaksi")->with('success', 'Pesanan berhasil ditolak')->with('auth', base64_encode($user->uid));
    }

    public function sellerSendOrder(Request $request)
    {
        $user = Auth::guard('web')->user();
        $request->validate([
            'delivery_service' => 'required|in:jne,jnt,sicepat,anteraja',
            'delivery_receipt_number' => 'required|string',
        ]);

        $order = Order::findOrFail($request->id);
        $orderController = new OrderController();
        $requestNew = new Request();
        $requestNew->replace([
            'delivery_service' => $request->delivery_service,
            'delivery_receipt_number' => $request->delivery_receipt_number,
            'just_json' => true,
        ]);
        // $orderController->waybillCheck($requestNew);

        $order->delivery_receipt_number = $request->delivery_receipt_number;
        $order->status = Order::SHIPPED;
        $order->save();

        // $pdf = Pdf::loadView('receipt_image', ['order' => $order->load(['address', 'seller', 'order_items.product', 'user.address'])]);
        // $order->link_label =  $pdf->save(public_path("/receipt_images/$order->delivery_receipt_number.pdf"));
        $order->save();
        return response()->json([
            "status" => "success",
            "message" => "Pesanan berhasil dikirim",
            "redirect" => route('dashboardSeller.allTransaction') . '?auth=' . base64_encode($user->uid)
        ], 200, [], JSON_UNESCAPED_SLASHES);
    }

    public function checkStatusDeliveredOrder($id)
    {
        $user = Auth::guard('web')->user();
        $order = Order::findOrFail($id);
        $dateFromDelivery = now();

        if ($order->status == Order::SHIPPED) {
            $order->status = Order::DELIVERED;
            $order->arrived_at = $dateFromDelivery;
            $order->save();
        }

        return redirect("/toko/semua-transaksi")->with('success', 'Pesanan telah sampai ketujuan')->with('auth', base64_encode($user->uid));
    }

    public function completedOrder($id)
    {
        $user = Auth::guard('web')->user();
        $order = Order::findOrFail($id);
        if (in_array($order->status, [Order::SHIPPED, Order::DELIVERED])) {
            $order->status = Order::COMPLETED;
        } else {
            return redirect("/toko/semua-transaksi")->with('error', 'Status Pesanan Belum memenuhi syarat untuk selesai')->with('auth', base64_encode($user->uid));
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

        DB::commit();
        return redirect("/toko/semua-transaksi")->with('success', 'Pesanan berhasil diselesaikan')->with('auth', base64_encode($user->uid));
    }

    private function viewReceipt(Order $order)
    {
        return view('receipt_image', ['order' => $order]);
    }
}
