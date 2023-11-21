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
}
