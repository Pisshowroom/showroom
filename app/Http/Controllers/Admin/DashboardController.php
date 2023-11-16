<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    //
    /* 
    for $data = [];
    1. put into a property inside $data O rder where status Completed
    2. put into a property inside $data $lypsisGetSetting('commerce_balance')put into a property inside $data Db products
    3. put into a property inside $data Db products count all
    4. put into a property inside $data - total users 
    */

    public function index(Request $request)
    {
        $data = [];

        $completedOrders = DB::table('orders')->whereNull('deleted_at')->where('status', 'Completed')->count();
        $data['completed_orders'] = $completedOrders;

        $commerceBalance = lypsisGetSetting('commerce_balance');
        $data['commerce_balance'] = $commerceBalance;

        $productCount = DB::table('products')->whereNull('deleted_at')->count();
        $data['product_count'] = $productCount;

        $userCount = DB::table('users')->where('is_seller', false)->whereNull('deleted_at')->count();
        $data['user_count'] = $userCount;

        return ResponseAPI($data, 200);
        // return view('admin.dashboard', compact('data'));
    }
}
