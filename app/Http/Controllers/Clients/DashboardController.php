<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(Request $request)
    {
        return view('clients.dashboard.dashboard');
    }
    public function myOrder(Request $request)
    {
        return view('clients.dashboard.order.all');
    }
    public function detailOrder(Request $request)
    {
        return view('clients.dashboard.order.detail');
    }
    public function settings(Request $request)
    {
        return view('clients.dashboard.settings');
    }
}
