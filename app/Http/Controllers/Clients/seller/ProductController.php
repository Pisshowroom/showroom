<?php

namespace App\Http\Controllers\Clients\seller;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function allProduct(Request $request)
    {
        $product = Product::when($request->filled('search'), function ($q) use ($request) {
            return $q->where('name', 'like', "%$request->search%");
        })->when($request->filled('category_id'), function ($q) use ($request) {
            return $q->where('category_id', $request->category_id);
        })->where('seller_id', Auth::guard('web')->user()->id)->with('category:id,name')->orderBy('id', $request->orderBy ?? 'desc')->paginate(10);
        $data['categories_product'] = Category::whereNull('deleted_at')->withCount('products')->whereHas('products', function ($q) {
            $q->where('seller_id', Auth::guard('web')->user()->id);
        })->select('id','name')->get();
        return view('clients.seller.product.all', ['products' => $product, 'data' => $data]);
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
