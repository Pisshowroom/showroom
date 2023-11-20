<?php

namespace App\Http\Controllers\Clients\seller;

use App\Http\Controllers\Api\OrderController;
use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class TransactionOrderController extends Controller
{

    // seller approve / reject
    public function sellerAcceptOrder(Order $order)
    {
        $order->status = Order::PROCESSED_BY_SELLER;
        $order->save();
        return redirect("/toko/semua-transaksi")->with('success', 'Pesanan berhasil diterima');
    }

    public function sellerRejectOrder(Order $order)
    {
        $order->status = Order::CANCELLED;
        $order->save();

        return redirect("/toko/semua-transaksi")->with('success', 'Pesanan berhasil ditolak');
    }

    public function sellerSendOrder(Order $order, Request $request)
    {
        $request->validate([
            'delivery_service' => 'required|in:jne,jnt,sicepat,anteraja',
            'delivery_receipt_number' => 'required|string',
        ]);

        $orderController = new OrderController();
        $requestNew = new Request();
        $requestNew->replace([
            'delivery_service' => $request->delivery_service,
            'delivery_receipt_number' => $request->delivery_receipt_number,
        ]);
        $orderController->waybillCheck($requestNew);

        $order->delivery_receipt_number = $request->delivery_receipt_number;
        $order->status = Order::SHIPPED;
        $order->save();

        return redirect("/toko/semua-transaksi")->with('success', 'Pesanan berhasil dikirim');
    }

    public function checkStatusDeliveredOrder(Order $order)
    {
        $dateFromDelivery = now();

        if ($order->status == Order::SHIPPED) {
            $order->status = Order::DELIVERED;
            $order->arrived_at = $dateFromDelivery;
            $order->save();
        }

        return redirect("/toko/semua-transaksi")->with('success', 'Pesanan telah sampai ketujuan');
    }
}
