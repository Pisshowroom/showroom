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
    public function login()
    {
        return view('clients.buyer.login');
    }
    public function register()
    {
        return view('clients.buyer.register');
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
}
