<?php

namespace App\Http\Controllers\Clients\buyer;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\Category;
use App\Models\Product;
use App\Models\Review;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProductController extends Controller
{
    public function getCommonData()
    {
        $data['categories'] = Category::withCount('products')->whereNull('deleted_at')->orderByDesc('products_count')->take(8)->get();
        $data['sub_categories'] = Category::withCount('products')->with('sub_categories:id,name,category_id')->whereNull('deleted_at')->latest()->get();

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

    public function allGridProduct(Request $request)
    {
        $product = Product::with(['seller:id,name,seller_slug,seller_name', 'category:id,name'])->whereNull('parent_id')
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
            ->orderBy('id', $request->filled('orderBy') && $request->orderBy == 'asc' ? 'asc' : 'desc')
            ->orderBy('reviews_avg_rating', $request->filled('rating') && $request->rating == 'asc' ? 'asc' : 'desc')
            ->orderBy('price', $request->filled('price') && $request->price == 'asc' ? 'asc' : 'desc')
            ->paginate(15);
        if ($product && count($product) > 0) {
            foreach ($product as $key => $value) {
                $value->price_discount = null;
                if ($value->discount != null) {
                    $value->price_discount = $value->price - ($value->price * ($value->discount / 100));
                }
            }
        }

        $data = $this->getCommonData();
        return view('clients.buyer.product.all_grid', ['products' => $product, 'data' => $data]);
    }
    public function allListProduct(Request $request)
    {
        $product = Product::with(['seller:id,name,seller_slug,seller_name', 'category:id,name'])->whereNull('parent_id')
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
        $data = $this->getCommonData();

        return view('clients.buyer.product.all_list', ['products' => $product, 'data' => $data]);
    }
    public function detailProduct(Request $request, $slug)
    {
        $product = Product::with(['seller:id,name,seller_slug,seller_name', 'category:id,name'])
            ->withAvg('reviews', 'rating')
            ->withCount('reviews')
            ->withSum(['order_items as total_sell' => function ($query) {
                $query->whereHas('order', function ($query) {
                    $query->where('status', 'done');
                });
            }], 'quantity')->where('slug', $slug)->firstOrFail();
        if ($product->discount && $product->discount > 0) {
            $product->price_discount = $product->price - ($product->price * ($product->discount / 100));
        } else {
            $product->price_discount = null;
        }
        $data = $this->getCommonData();
        $data['reviews'] = Review::whereNull('deleted_at')->with('user:id,name,image')->orderByDesc('id')->paginate(5);
        foreach ($data['reviews'] as $review) {
            if ($review->created_at)
                $review->date = parseDateId($review->created_at) . ' WIB';
            else
                $review->date = null;
        }
        $data['related_products'] = Product::whereNot('id', $product->id)->where('category_id', $product->category_id)
            ->with(['seller:id,name,seller_slug,seller_name', 'category:id,name'])
            ->withAvg('reviews', 'rating')
            ->withSum(['order_items as total_sell' => function ($query) {
                $query->whereHas('order', function ($query) {
                    $query->where('status', 'done');
                });
            }], 'quantity')->orderByDesc('total_sell')->take(8)->get();
        if ($data['related_products'] && count($data['related_products']) > 0) {
            foreach ($data['related_products'] as $key => $value) {
                $value->price_discount = null;
                if ($value->discount != null) {
                    $value->price_discount = $value->price - ($value->price * ($value->discount / 100));
                }
            }
        }
        $data['same_products'] = Product::whereNot('id', $product->id)->where('seller_id', $product->seller_id)
            ->with(['seller:id,name,seller_slug,seller_name', 'category:id,name'])
            ->withAvg('reviews', 'rating')
            ->withSum(['order_items as total_sell' => function ($query) {
                $query->whereHas('order', function ($query) {
                    $query->where('status', 'done');
                });
            }], 'quantity')->orderByDesc('total_sell')->take(8)->get();
        if ($data['same_products'] && count($data['same_products']) > 0) {
            foreach ($data['same_products'] as $key => $value) {
                $value->price_discount = null;
                if ($value->discount != null) {
                    $value->price_discount = $value->price - ($value->price * ($value->discount / 100));
                }
            }
        }
        return view('clients.buyer.product.detail', ['product' => $product, 'data' => $data]);
    }

    public function addReview(Request $request)
    {
        $request->validate([
            'product_id' => 'required',
            'rating' => 'required',
            'text' => 'required'
        ]);
        $user = Auth::guard('web')->user();
        $review = new Review();
        $review->user_id = $user->id;
        if ($request->filled('order_id'))
            $review->order_id = (int) $request->order_id;
        if ($request->filled('product_id'))
            $review->product_id = (int) $request->product_id;
        $review->rating =  (int) $request->rating;
        $review->text = $request->text;
        if ($request->hasFile('image'))
            $review->images = $request->image;
        $review->save();
        return redirect("/produk-" . $request->product_slug)->with('success', 'Berhasil menambahkan Ulasan')->with('auth', base64_encode($user->uid));
    }
}
