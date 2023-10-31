<?php

namespace App\Http\Controllers\Clients\buyer;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class SellerController extends Controller
{
    private function categories()
    {
        return Category::whereNull('deleted_at')->withCount('products')->get();
    }
    public function allSeller(Request $request)
    {
        $data['categories'] = $this->categories();
        $seller = User::where('is_seller', true)->withCount('products')->when($request->filled('search'), function ($q) use ($request) {
            return $q->where('name', 'like', "%$request->search%");
        })->orderBy('id', $request->orderBy ?? 'desc')->paginate($request->per_page ?? 30);
        return view('clients.buyer.seller.all', ['sellers' => $seller, 'data' => $data]);
    }

    public function detailSeller($slug, Request $request)
    {
        $seller = User::where('seller_slug', $slug)->withCount('products')->first();
        $product = Product::when($request->filled('search'), function ($q) use ($request) {
            return $q->where('name', 'like', "%$request->search%");
        })->when($request->filled('category_id'), function ($q) use ($request) {
            return $q->where('category_id', $request->category_id);
        })->where('seller_id', $seller->id)->orderBy('id', $request->orderBy ?? 'desc')->paginate($request->per_page ?? 30);
        $data['categories'] = $this->categories();
        return view('clients.buyer.seller.detail', ['seller' => $seller, 'products' => $product, 'data' => $data]);
    }
}
