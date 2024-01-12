<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ComplaintController extends Controller
{
    public function index(Request $request)
    {
        $query = Order::with(['user']);
        if ($request->filled('statusRequest')) {
            $query->where('status', $request->statusRequest);
        } else {
            $query->where('status', 'like', "%Complaint%");
        }

        if ($request->filled('search')) {
            $query->where('payment_identifier', 'like', "%$request->search%");
        }

        $query->orderBy(DB::raw("FIELD(status, 'Complaint', 'ComplaintCompleted', 'ComplaintDeclined')"));
        
        $orders = $query->paginate($request->per_page ?? 15);

        return $orders;
    }

    public function show(Order $order)
    {
        $order->load(['user']);

        return $order;
    }
}
