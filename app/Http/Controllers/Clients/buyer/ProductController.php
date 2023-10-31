<?php

namespace App\Http\Controllers\Clients\buyer;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private function categories()
    {
        return Category::whereNull('deleted_at')->withCount('products')->get();
    }
    public function allGridProduct(Request $request)
    {
        $product = Product::when($request->filled('search'), function ($q) use ($request) {
            return $q->where('name', 'like', "%$request->search%");
        })->when($request->filled('category_id'), function ($q) use ($request) {
            return $q->where('category_id', $request->category_id);
        })->orderBy('id', $request->orderBy ?? 'desc')->paginate($request->per_page ?? 30);
        $data['categories'] = $this->categories();
        return view('clients.buyer.product.all_grid', ['products' => $product, 'data' => $data]);
    }
    public function allListProduct(Request $request)
    {
        $product = Product::with(['seller:id,name', 'category'])->when($request->filled('search'), function ($q) use ($request) {
            return $q->where('name', 'like', "%$request->search%");
        })->when($request->filled('category_id'), function ($q) use ($request) {
            return $q->where('category_id', $request->category_id);
        })->orderBy('id', $request->orderBy ?? 'desc')->paginate($request->per_page ?? 30);
        $data['categories'] = $this->categories();

        return view('clients.buyer.product.all_list', ['products' => $product, 'data' => $data]);
    }
    public function detailProduct($slug)
    {
        $product = Product::with(['seller:id,name', 'category'])->where('slug', $slug)->first();
        $data['categories'] = $this->categories();
        return view('clients.buyer.product.detail', ['product' => $product, 'data' => $data]);
    }
}
