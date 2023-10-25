<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BuyerController extends Controller
{
    public function home(Request $request)
    {
        return view('clients.buyer.home');
    }

    //auth
    public function login()
    {
        return view('clients.buyer.auth.login');
    }
    public function register()
    {
        return view('clients.buyer.auth.register');
    }

    public function notFound()
    {
        return view('clients.buyer.error404');
    }
    public function contact()
    {
        return view('clients.buyer.contact');
    }
    public function about()
    {
        return view('clients.buyer.about');
    }
    public function term()
    {
        return view('clients.buyer.term');
    }

    //product
    public function allGridProduct()
    {
        return view('clients.buyer.product.all_grid');
    }
    public function allListProduct()
    {
        return view('clients.buyer.product.all_list');
    }
    public function detailProduct()
    {
        return view('clients.buyer.product.detail');
    }

    //user
    public function checkout()
    {
        return view('clients.buyer.user.checkout');
    }
    public function cart()
    {
        return view('clients.buyer.user.cart');
    }

    public function wishlist()
    {
        return view('clients.buyer.user.wishlist');
    }

    //seller
    public function allSeller()
    {
        return view('clients.buyer.seller.all');
    }

    public function detailSeller()
    {
        return view('clients.buyer.seller.detail');
    }


    //dashboard
    public function dashboard()
    {
        return view('clients.buyer.dashboard.dashboard');
    }

}
