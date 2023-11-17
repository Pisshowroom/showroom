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
        $order->load(['master_account', 'order_items.product.parent', 'user']);

        return new OrderResource($order);
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
            ->with(['single_order_item_with_product.product.parent', 'single_order_item_with_product.product.seller'])->paginate(20);

        return OrderResource::collection($orders);
    }
}
