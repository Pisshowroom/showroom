<?php

namespace App\Http\Controllers\Clients\buyer;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\Category;
use App\Models\Product;
use App\Models\Review;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SellerController extends Controller
{
    public function getCommonData()
    {
        $data['categories'] = Category::whereNull('deleted_at')->withCount('products')->get();

        if (Auth::guard('web')->user() && Auth::guard('web')->user()->id) {
            $data['addresses'] = $this->addresses();
        } else {
            $data['addresses'] = null;
        }

        return $data;
    }

    private function addresses()
    {
        return Address::where('user_id', Auth::guard('web')->user()->id)->where('main', true)->whereNull('deleted_at')->first();
    }

    public function allSeller(Request $request)
    {
        $data = $this->getCommonData();
        $seller = User::where('is_seller', true)->withCount('products')
            ->whereHas('products', function ($q) use ($request) {
                $q->withAvg('reviews', 'rating')
                    ->withSum(['order_items as total_sell' => function ($query) {
                        $query->whereHas('order', function ($query) {
                            $query->where('status', 'done');
                        });
                    }], 'quantity');
            })
            // ->select('id', 'seller_name', 'image', 'seller_slug')
            ->orderByDesc('id')->paginate(15);
        foreach ($seller as $key => $value) {
            $productIds = Product::where('seller_id', $value->id)->pluck('id');
            $averageRating = Review::whereIn('product_id', $productIds)->avg('rating');
        }

        $seller->rating_seller = doubleVal($averageRating);
        return view('clients.buyer.seller.all', ['sellers' => $seller, 'data' => $data]);
    }

    public function detailSeller($slug, Request $request)
    {
        $seller = User::where('seller_slug', $slug)->withCount('products')->firstOrFail();
        $product = Product::where('seller_id', $seller->id)
            ->with(['seller:id,name,seller_slug,seller_name', 'category:id,name'])->whereNull('parent_id')
            ->when($request->filled('search'), function ($q) use ($request) {
                return $q->where('name', 'like', "%$request->search%");
            })->when($request->filled('category_id'), function ($q) use ($request) {
                return $q->where('category_id', $request->category_id);
            })
            ->withAvg('reviews', 'rating')
            ->withSum(['order_items as total_sell' => function ($query) {
                $query->whereHas('order', function ($query) {
                    $query->where('status', 'done');
                });
            }], 'quantity')
            ->orderBy('id', $request->filled('orderBy') ? $request->orderBy : 'desc')
            ->orderBy('reviews_avg_rating', $request->filled('rating') ? $request->rating : 'desc')
            ->orderBy('price', $request->filled('price') ? $request->price : 'desc')
            ->paginate(15);
        if ($product && count($product) > 0) {
            foreach ($product as $key => $value) {
                $value->price_discount = null;
                if ($value->discount != null) {
                    $value->price_discount = $value->price - ($value->price * ($value->discount / 100));
                }
            }
        }
        $productIds = Product::where('seller_id', $seller->id)->pluck('id');
        $averageRating = Review::whereIn('product_id', $productIds)->avg('rating');

        $seller->rating_seller = doubleVal($averageRating);
        $data = $this->getCommonData();
        $data['categories_product'] = Category::whereNull('deleted_at')->withCount('products')->whereHas('products', function ($q) use ($seller) {
            $q->where('seller_id', $seller->id);
        })->get();
        return view('clients.buyer.seller.detail', ['seller' => $seller, 'products' => $product, 'data' => $data]);
    }
}
