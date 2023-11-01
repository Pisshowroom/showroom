<?php

namespace App\Http\Controllers\Clients\buyer;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Review;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private function categories()
    {
        return Category::whereNull('deleted_at')->withCount('products')->get();
    }
    public function allGridProduct(Request $request)
    {
        $product = Product::with(['seller:id,name,seller_slug', 'category'])->when($request->filled('search'), function ($q) use ($request) {
            return $q->where('name', 'like', "%$request->search%");
        })->when($request->filled('category_id'), function ($q) use ($request) {
            return $q->where('category_id', $request->category_id);
        })->orderBy('id', $request->orderBy ?? 'desc')->paginate($request->per_page ?? 30);
        $data['categories'] = $this->categories();
        return view('clients.buyer.product.all_grid', ['products' => $product, 'data' => $data]);
    }
    public function allListProduct(Request $request)
    {
        $product = Product::with(['seller:id,name,seller_slug', 'category'])->when($request->filled('search'), function ($q) use ($request) {
            return $q->where('name', 'like', "%$request->search%");
        })->when($request->filled('category_id'), function ($q) use ($request) {
            return $q->where('category_id', $request->category_id);
        })->orderBy('id', $request->orderBy ?? 'desc')->paginate($request->per_page ?? 30);
        $data['categories'] = $this->categories();

        return view('clients.buyer.product.all_list', ['products' => $product, 'data' => $data]);
    }
    public function detailProduct($slug)
    {
        $product = Product::with(['seller:id,name,seller_slug', 'category'])->where('slug', $slug)->first();
        $data['reviews'] = Review::whereNull('deleted_at')->with('user:id,name,image')->orderByDesc('id')->paginate(5);
        foreach ($data['reviews'] as $review) {
            if ($review->created_at)
                $review->date = parseDateId($review->created_at) . ' WIB';
            else
                $review->date = null;
        }
        $data['categories'] = $this->categories();
        return view('clients.buyer.product.detail', ['product' => $product, 'data' => $data]);
    }

    public function addReview(Request $request)
    {
        $request->validate([
            'order_id' => 'required',
            'rating' => 'required',
            'text' => 'required'
        ]);
        $user = Auth::guard('web')->user();
        $review = new Review();
        $review->user_id = $user->id;
        if ($request->filled('order_id'))
            $review->order_id = (int) $request->order_id;
        $review->rating =  (int) $request->rating;
        $review->text = $request->text;
        if ($request->hasFile('image'))
            $review->images = $request->image;
        $review->save();
        return redirect("/produk-" . $request->product_slug)->with('success', 'Berhasil menambahkan Ulasan');
    }
}
