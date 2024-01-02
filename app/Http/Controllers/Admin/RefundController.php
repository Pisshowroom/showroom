<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RefundController extends Controller
{
    public function index(Request $request)
    {
        // query where status %like% Refund
        $query = Order::with(['user']);
        // create orderBy status RequestedRefund,ReturnShipped,ReturnDelivered
        if ($request->filled('statusRequest')) {
            $query->where('status', $request->statusRequest);
        } else {
            $query->where('status', 'like', "%Refund%");
        }

        if ($request->filled('search')) {
            $query->where('payment_identifier', 'like', "%$request->search%");
        }

        $query->orderBy(DB::raw("FIELD(status, 'RequestedRefund', 'RefundDone', 'RefundDeclined')"));
        
        $orders = $query->paginate($request->per_page ?? 15);

        // return view('admin.refund.index', compact('orders'));
        return $orders;
    }

    // response api array counted total requested refund
    public function countComplaintsRefundsReturns(Request $request)
    {
        $complaints = Order::where('status', 'like', "Complaint")->count();
        $data['complaints_counted'] = $complaints;
        $refunds = Order::where('status', 'like', "RequestedRefund")->count();
        $data['refunds_counted'] = $refunds;
        $returnings = Order::where('status', 'like', "RequestedReturn")->count();
        $data['returnings_counted'] = $returnings;

        return $data;
    }

    public function show(Order $order)
    {
        $order->load(['user', 'order_items', 'product', 'master_account']);

        return $order;
    }

    public function accept(Order $order)
    {
        $order->update(['status' => Order::REFUND_DONE]);
        // TODOS Cek OrderData Admin Controller

        return $order;
    }

    public function reject(Order $order)
    {
        $order->update(['status' => Order::REFUND_DECLINED]);

        return $order;
    }


}
