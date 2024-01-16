<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        $orders = Order::with(['user'])
        ->where('status', 'NOT LIKE', '%Complaint%')
        ->where('status', 'NOT LIKE', '%Return%')
        ->where('status', 'NOT LIKE', '%Refund%')
        ->when($request->filled('search'), function ($query) use ($request) {
            $query->where('payment_identifier', 'like', "%$request->search%");
        })
        ->when($request->filled('statusRequest'), function ($query) use ($request) {
            $query->where('status', $request->statusRequest);
        })
        // ->orderByDesc('created_at')
        ->orderBy(DB::raw("FIELD(status, 'RequestedReturn', 'ReturnShipped', 'ReturnDelivered')"))
        // ->paginate(2);
        ->paginate($request->per_page ?? 15);

        return $orders;
    }

    public function detail(Order $order)
    {
        $order->load(['master_account', 'order_items.product.parent', 'user.address.ro_city']);

        return $order;
    }
}
