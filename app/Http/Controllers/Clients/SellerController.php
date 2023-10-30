<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SellerController extends Controller
{
    public function dashboard(Request $request)
    {
        return view('clients.seller.dashboard');
    }
    public function profile(Request $request)
    {
        return view('clients.seller.profile');
    }
    public function addProduct(Request $request)
    {
        return view('clients.seller.product.add');
    }
    public function editProduct(Request $request)
    {
        return view('clients.seller.product.add');
    }
    public function allProduct(Request $request)
    {
        return view('clients.seller.product.all');
    }
    public function allTransaction(Request $request)
    {
        return view('clients.seller.transaction.all');
    }
    public function detailTransaction(Request $request)
    {
        return view('clients.seller.transaction.detail');
    }
    public function addWithdraw(Request $request)
    {
        return view('clients.seller.withdraw.add');
    }
    public function allWithdraw(Request $request)
    {
        return view('clients.seller.withdraw.all');
    }
    public function detailWithdraw(Request $request)
    {
        return view('clients.seller.withdraw.detail');
    }
}
