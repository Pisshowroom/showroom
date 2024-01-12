<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderDataController extends Controller
{
    public function listComplaint()
    {
        return "List Complaint";
    }

    public function listReturnBack()
    {
        return "List Return Back";
    }

    public function listRefund()
    {
        return "List Refund";
    }

    public function acceptComplaint(Order $order)
    {
        DB::beginTransaction();
        $order->load('user');
        $user = $order->user;

        if ($user) {
            $user->update([
                'balance' => ($user->balance + $order->refund_total)
            ]);
        } else {
            return ResponseAPI('Gagal, Data Pembeli Tidak Ditemukan', 404);
        }
        $order->status = Order::COMPLAINT_COMPLETED;

        $order->save();

        DB::commit();

        return ResponseAPI('Complaint Accepted', 200);
    }

    public function rejectComplaint(Order $order)
    {
        $order->status = Order::COMPLAINT_DECLINED;
        $order->save();

        return ResponseAPI('Complaint Rejected', 200);
    }

    public function acceptReturnBack(Order $order)
    {
        // if order REQUESTED_RETURN
        if ($order->status == Order::REQUESTED_RETURN) {
            $order->status = Order::RETURN_ACCEPTED;
            $order->save();

            return ResponseAPI('Pengembalian disetujui', 200);
        } else {
            return ResponseAPI('Gagal, Data pesanan / Status tidak valid', 404);
        }
    }

    public function rejectReturnBack(Order $order)
    {
        $order->status = Order::RETURN_DECLINED;
        $order->save();
        return ResponseAPI('Pengembalian ditolak', 200);
    }

    public function acceptRefund(Order $order)
    {
        $order->load('user');

        $user = $order->user;

        if ($user) {
            $user->update([
                'balance' => ($user->balance + $order->refund_total)
            ]);
        } else {
            return ResponseAPI('Gagal, Data Pembeli Tidak Ditemukan', 404);
        }

        $order->status = Order::REFUND_DONE;
        $order->save();

        return ResponseAPI('Refund Accepted', 200);
    }

    public function rejectRefund(Order $order)
    {
        $order->status = Order::REFUND_DECLINED;
        $order->save();

        return ResponseAPI('Refund Rejected', 200);
    }
}
