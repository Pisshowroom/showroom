<?php

namespace App\Http\Controllers\Clients\buyer;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Models\Address;
use App\Models\Category;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    public function getCommonData()
    {
        $data['categories'] = Category::withCount('products')->whereNull('deleted_at')->orderByDesc('products_count')->take(8)->get();
        $data['sub_categories'] = Category::withCount('products')->with('sub_categories:id,name,category_id')->whereNull('deleted_at')->latest()->get();

        if (Auth::guard('web')->user() && Auth::guard('web')->user()->id) {
            $data['addresses'] = $this->addresses();
            $data['userWishlist'] = Wishlist::where('user_id', Auth::guard('web')->user()->id)->whereNotNull('product_id')->count();
        } else {
            $data['addresses'] = null;
            $data['userWishlist'] = 0;
        }

        return $data;
    }

    private function addresses()
    {
        return Address::where('user_id', Auth::guard('web')->user()->id)->where('main', true)->where('for_seller', '!=', true)->whereNull('deleted_at')->first();
    }


    private function limitedProducts()
    {
        $limitedProducts = Product::with([
            'category', 'seller:id,name,seller_slug,seller_name',
            'seller.address:id,user_id,for_seller,main,city',
        ])->byNotVariant()->inRandomOrder()->take(8)->get();

        $data['recommended_products'] = ProductResource::collection($limitedProducts);
        foreach ($data['recommended_products'] as $value) {
            if ($value->discount && $value->discount > 0) {
                $value->price_discount = $value->price - ($value->price * ($value->discount / 100));
            } else {
                $value->price_discount = null;
            }
        }
        return $data['recommended_products'];
    }
    private function bestSellerProducts()
    {
        $bestSellerProducts = Product::with([
            'category', 'seller:id,name,seller_slug,seller_name',
            'seller.address:id,user_id,for_seller,main,city',
        ])
            ->addSelect([
                'total_quantity' => OrderItem::selectRaw('sum(quantity)')
                    ->whereColumn('product_id', 'products.id')
                    ->join('orders', 'order_items.order_id', '=', 'orders.id')
                    ->where('orders.status', 'done')
            ])->byNotVariant()
            ->orderByDesc('total_quantity')
            ->take(8)
            ->get();
        $data['best_seller_product'] = ProductResource::collection($bestSellerProducts);
        foreach ($data['best_seller_product'] as $value) {
            if ($value->discount && $value->discount > 0) {
                $value->price_discount = $value->price - ($value->price * ($value->discount / 100));
            } else {
                $value->price_discount = null;
            }
        }
        return $data['best_seller_product'];
    }

    public function wishlist(Request $request)
    {
        $user = Auth::guard('web')->user();
        if (!$user) {
            return redirect()->route('buyer.home');
        }
        $data = $this->getCommonData();
        $products = Product::whereHas('usersWishlisted', function ($query) use ($user) {
            $query->where('user_id', $user->id);
        })
            ->whereNull('parent_id')
            ->when($request->filled('search'), function ($q) use ($request) {
                return $q->where('name', 'like', "%$request->search%");
            })->when($request->filled('category_id'), function ($q) use ($request) {
                return $q->where('category_id', $request->category_id);
            })->when($request->filled('sub_category_id'), function ($q) use ($request) {
                return $q->where('sub_category_id', $request->sub_category_id);
            })->withAvg('reviews', 'rating')
            ->withSum(['order_items as total_sell' => function ($query) {
                $query->whereHas('order', function ($query) {
                    $query->where('status', 'done');
                });
            }], 'quantity')
            ->orderBy('id', $request->filled('orderBy') ? $request->orderBy : 'desc')
            ->orderBy('reviews_avg_rating', $request->filled('rating') ? $request->rating : 'desc')
            ->orderBy('price', $request->filled('price') ? $request->price : 'desc')
            ->paginate(10);

        $data['best_seller_product'] = $this->bestSellerProducts();
        $data['recommended_products'] = $this->limitedProducts();

        return view('clients.buyer.user.wishlist', ['data' => $data, 'products' => $products]);
    }

    public function store(Request $request)
    {
        $user = auth()->guard('web')->user();
        $product = Product::where('id', $request->id)->first();
        if (!$product)
            return ResponseAPI('Produk tidak ditemukan', 400);
        $product->usersWishlisted()->syncWithoutDetaching($user->id);

        return response()->json([
            'message' => 'Produk ditambahkan ke Wishlist'
        ]);
    }

    public function destroy(Request $request)
    {
        $user = auth()->guard('web')->user();
        $product = Product::where('id', $request->id)->first();
        if (!$product)
            return ResponseAPI('Produk tidak ditemukan', 400);

        $product->usersWishlisted()->detach($user->id);

        return response()->json([
            'message' => 'Produk dihapus dari Wishlist'
        ]);
    }
}
