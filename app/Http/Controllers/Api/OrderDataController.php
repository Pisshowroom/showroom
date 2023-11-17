<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\OrderResource;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderDataController extends Controller
{
    public function index(Request $request)
    {
        $user = auth()->guard('api-client')->user();


        $status = $request->input('status');

        $orders = Order::where('user_id')->when($status, function ($query, $status) {
            return $query->where('status', $status);
        })->paginate(20);

        return OrderResource::collection($orders);
    }

    public function detail(Order $order)
    {
        $order->load(['master_account', 'order_items.product.parent', 'user']);

        return new OrderResource($order);
    }
}
