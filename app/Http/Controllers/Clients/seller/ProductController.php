<?php

namespace App\Http\Controllers\Clients\seller;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function allProduct(Request $request)
    {
        return view('clients.seller.product.all');
    }
    public function addProduct(Request $request)
    {
        return view('clients.seller.product.add', ['product' => null]);
    }
    public function editProduct(Request $request)
    {
        $product = Product::where('id', $request->id)->first();
        return view('clients.seller.product.add', ['product' => $product]);
    }
}
