<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $data = [];

        $completedOrders = DB::table('orders')->whereNull('deleted_at')->where('status', 'Completed')->count();
        $data['completed_orders'] = $completedOrders;

        $commerceBalance = lypsisGetSetting('commerce_balance');
        $data['commerce_balance'] = intval($commerceBalance);

        $productCount = DB::table('products')->whereNull('deleted_at')->count();
        $data['product_count'] = $productCount;

        $userCount = DB::table('users')->where('is_seller', false)->whereNull('deleted_at')->count();
        $data['user_count'] = $userCount;

        return ResponseAPI($data, 200);
        // return view('admin.dashboard', compact('data'));
    }

    public function activityOrders(Request $request)
    {
        $request->validate([
            'type' => 'required|in:yearly,monthly,weekly'
        ]);

        $type = $request->input('type');
        // dd($type);

        $now = Carbon::now();
        $startDate = now()->startOfYear();
        $endDate = now()->endOfYear();
        $interval = '1 month';

        if ($type === 'monthly') {
            $startDate = now()->startOfMonth();
            $endDate = now()->endOfMonth();
            $interval = '1 week';
        } elseif ($type === 'weekly') {
            $startDate = now()->startOfWeek();
            $endDate = now()->endOfWeek();
            $interval = '1 day';
        }

        // $orders = DB::table('orders')
        $orders = Order
            ::whereNull('deleted_at')
            ->select([
                'id',
                'total',
                'total_final',
                'created_at',
                DB::raw('COALESCE(total_final, total) as total_amount') // Use COALESCE to get total_final or total
            ])
            ->whereBetween('created_at', [$startDate->format('Y-m-d'), $endDate->format('Y-m-d')])
            ->orderBy('created_at', 'asc')
            ->get();
        // dd($orders);
        $groupedOrders = $orders->groupBy(function ($order) use ($interval) {
            return Carbon::parse($order->created_at)->round($interval);
        });

        $categories = [];
        $seriesData = [];

        foreach ($groupedOrders as $date => $orders) {
            // $categories[] = Carbon::parse($date)->format('M Y');
            if ($type === 'yearly') {
                $categories[] = Carbon::parse($date)->format('M Y');
            } else {
                $categories[] = Carbon::parse($date)->format('d M Y');
            }
            // dd($orders);
            // $seriesData[] = count($orders);
            $seriesData[] = $orders->sum('total_amount');
        }

        return [
            'series' => [
                [
                    'name' => 'Total Pesanan',
                    'data' => $seriesData
                ]
            ],
            'categories' => $categories
        ];
    }
}
