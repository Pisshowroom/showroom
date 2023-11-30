<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        $orders = Order::when($request->filled('search'), function ($query) use ($request) {
            $query->where('payment_identifier', 'like', "%$request->search%");
        })->paginate($request->per_page ?? 15);

        return $orders;
    }

    public function detail(Order $order)
    {
        $order->load(['master_account', 'order_items.product.parent', 'user.address.ro_city']);

        return $order;
    }
}
