<?php

namespace App\Http\Controllers\Clients\buyer;

use App\Http\Controllers\Controller;
use App\Http\Resources\NotificationResource;
use App\Http\Resources\ProductResource;
use App\Models\Address;
use App\Models\Ads;
use App\Models\Category;
use App\Models\Notification;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\Review;
use App\Models\User;
use App\Models\Wishlist;
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
            $data['userWishlist'] = Wishlist::where('user_id', Auth::guard('web')->user()->id)->whereNotNull('product_id')->count();
            $notifications = Notification::where('user_id', Auth::guard('web')->user()->id)->orderBy('created_at', 'desc')->take(4)->get();
            $data['notification'] = NotificationResource::collection($notifications);
            $data['notif_count'] = Notification::where('user_id', Auth::guard('web')->user()->id)->count();
        } else {
            $data['addresses'] = null;
            $data['userWishlist'] = 0;
            $data['notification'] = null;
            $data['notif_count'] = 0;
        }

        return $data;
    }

    private function addresses()
    {
        return Address::where('user_id', Auth::guard('web')->user()->id)->where('main', true)->where('for_seller', '!=', true)->whereNull('deleted_at')->first();
    }

    public function allGridProduct(Request $request)
    {
        $product = Product::with([
            'seller:id,name,seller_slug,seller_name',
            'seller.address:id,user_id,for_seller,main,city',
            'category:id,name'
        ])->whereNull('parent_id')
            ->when($request->filled('search'), function ($q) use ($request) {
                return $q->where('name', 'like', "%$request->search%");
            })->when($request->filled('category_id'), function ($q) use ($request) {
                return $q->where('category_id', $request->category_id);
            })->when($request->filled('sub_category_id'), function ($q) use ($request) {
                return $q->where('sub_category_id', $request->sub_category_id);
            })->when($request->filled('seller_id'), function ($q) use ($request) {
                $sellerIds = is_array($request->seller_id) ? $request->seller_id : [$request->seller_id];
                return $q->whereIn('seller_id', $sellerIds);
            })->when($request->filled('special'), function ($q) use ($request) {
                if ($request->special == 'promo') {
                    return $q->whereNotNull('discount')->where('discount', '>', '0');
                }
            })
            ->withAvg('reviews', 'rating')
            ->withSum(['order_items as total_sell' => function ($query) {
                $query->whereHas('order', function ($query) {
                    $query->where('status', 'done');
                });
            }], 'quantity')
            ->orderBy('id',  !$request->filled('orderBy') || ($request->filled('orderBy') && $request->orderBy == 'desc') || ($request->filled('special') && $request->special == 'newest') ? 'desc' : 'asc')
            ->orderBy('reviews_avg_rating', $request->filled('rating') && $request->rating == 'asc' ? 'asc' : 'desc')
            ->orderBy('price', !$request->filled('price') || ($request->filled('price') && $request->price == 'desc') || ($request->filled('special') && $request->special == 'special')  ? 'desc' : 'asc')
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
        $data['best_seller_product'] = $this->bestSellerProducts();
        $data['sellers'] = User::where('is_seller', 1)->select('id', 'name')
            ->whereHas('products', function ($q) {
                $q->withAvg('reviews', 'rating')
                    ->with(['order_items' => function ($query) {
                        $query->whereHas('order', function ($query) {
                            $query->where('status', 'done');
                        });
                    }])
                    ->withSum('order_items', 'quantity');
            })->withCount('products')->orderByDesc('products_count')
            ->take(4)->get();
        $data['ads1'] = $this->getAds('above_list_product');
        $data['ads2'] = $this->getAds('below_list_seller');

        return view('clients.buyer.product.all_grid', ['products' => $product, 'data' => $data]);
    }
    public function allListProduct(Request $request)
    {
        $product = Product::with([
            'seller:id,name,seller_slug,seller_name',
            'seller.address:id,user_id,for_seller,main,city',
            'category:id,name'
        ])->whereNull('parent_id')
            ->when($request->filled('search'), function ($q) use ($request) {
                return $q->where('name', 'like', "%$request->search%");
            })->when($request->filled('category_id'), function ($q) use ($request) {
                return $q->where('category_id', $request->category_id);
            })->when($request->filled('sub_category_id'), function ($q) use ($request) {
                return $q->where('sub_category_id', $request->sub_category_id);
            })->when($request->filled('seller_id'), function ($q) use ($request) {
                $sellerIds = is_array($request->seller_id) ? $request->seller_id : [$request->seller_id];
                return $q->whereIn('seller_id', $sellerIds);
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
        $data['best_seller_product'] = $this->bestSellerProducts();
        $data['sellers'] = User::where('is_seller', 1)->select('id', 'name')
            ->whereHas('products', function ($q) {
                $q->withAvg('reviews', 'rating')
                    ->with(['order_items' => function ($query) {
                        $query->whereHas('order', function ($query) {
                            $query->where('status', 'done');
                        });
                    }])
                    ->withSum('order_items', 'quantity');
            })->withCount('products')->orderByDesc('products_count')
            ->take(4)->get();
        $data['ads1'] = $this->getAds('above_list_product');
        $data['ads2'] = $this->getAds('below_list_seller');
        return view('clients.buyer.product.all_list', ['products' => $product, 'data' => $data]);
    }
    public function detailProduct2($id)
    {
        $product = Product::where('id', $id)->first();
        if (!$product)
            return redirect()->route('buyer.home')->with('error', 'Produk tidak ditemukan.');
        return redirect()->route('buyer.detailProduct', ['slug' => $product->slug]);
    }
    public function detailProduct($slug)
    {
        $user = Auth::guard('web')->user();
        $product = Product::with([
            'variants:id,name,parent_id,stock,seller_id,slug,price',
            'seller:id,name,seller_slug,seller_name',
            'seller.address:id,user_id,for_seller,main,city',
            'category:id,name',
            'reviews' => function ($q) use ($user) {
                $q->select('id', 'product_id', 'user_id');
                if ($user && $user->id)
                    $q->where('user_id', $user->id);
            }
        ])
            ->withAvg('reviews', 'rating')
            ->withCount('reviews')
            ->withSum(['order_items as total_sell' => function ($query) {
                $query->whereHas('order', function ($query) {
                    $query->where('status', 'done');
                });
            }], 'quantity')
            ->where('slug', $slug)
            ->with('variants')
            ->whereNull('deleted_at')  // Assuming products table has a 'deleted_at' column
            ->first();
        if (!$product)
            return redirect()->route('buyer.home')->with('error', 'Produk tidak ditemukan.')->with('auth', base64_encode($user->uid));

        if ($product->discount && $product->discount > 0) {
            $product->price_discount = $product->price - ($product->price * ($product->discount / 100));
        } else {
            $product->price_discount = null;
        }
        $product->is_wishlisted = false;

        if ($user != null && $product->seller_id != null) {
            $product->is_wishlisted = $product->usersWishlisted()->where('user_id', $user->id)->exists();
        }

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
            ->take(3)
            ->get();
        $data = $this->getCommonData();
        $data['best_seller_product'] = ProductResource::collection($bestSellerProducts);
        $data['reviews'] = Review::whereNull('deleted_at')->with('user:id,name,image')->orderByDesc('id')->paginate(5);
        foreach ($data['reviews'] as $review) {
            if ($review->created_at)
                $review->date = parseDates($review->created_at) . ' WIB';
            else
                $review->date = null;
        }
        $data['related_products'] = Product::whereNot('id', $product->id)->where('category_id', $product->category_id)
            ->with([
                'seller:id,name,seller_slug,seller_name',
                'seller.address:id,user_id,for_seller,main,city',
                'category:id,name'
            ])->whereNull('parent_id')
            ->withAvg('reviews', 'rating')
            ->withSum(['order_items as total_sell' => function ($query) {
                $query->whereHas('order', function ($query) {
                    $query->where('status', 'done');
                });
            }], 'quantity')->orderByDesc('total_sell')->take(5)->get();
        if ($data['related_products'] && count($data['related_products']) > 0) {
            foreach ($data['related_products'] as $key => $value) {
                $value->price_discount = null;
                if ($value->discount != null) {
                    $value->price_discount = $value->price - ($value->price * ($value->discount / 100));
                }
            }
        }
        $data['same_products'] = Product::whereNot('id', $product->id)->where('seller_id', $product->seller_id)
            ->with([
                'seller:id,name,seller_slug,seller_name',
                'seller.address:id,user_id,for_seller,main,city',
                'category:id,name'
            ])->whereNull('parent_id')
            ->withAvg('reviews', 'rating')
            ->withSum(['order_items as total_sell' => function ($query) {
                $query->whereHas('order', function ($query) {
                    $query->where('status', 'done');
                });
            }], 'quantity')->orderByDesc('total_sell')->take(5)->get();
        if ($data['same_products'] && count($data['same_products']) > 0) {
            foreach ($data['same_products'] as $key => $value) {
                $value->price_discount = null;
                if ($value->discount != null) {
                    $value->price_discount = $value->price - ($value->price * ($value->discount / 100));
                }
            }
        }
        if (Auth::guard('web')->user()) {
            $review_user = Order::where('user_id', Auth::guard('web')->user()->id)
                ->where('status', 'Completed')
                ->whereHas('order_items', function ($q) use ($product) {
                    $q->where('product_id', $product->id)->select(['id', 'product_id']);
                })
                ->with('order_items')->latest()->first();
            if ($review_user) {
                $product->review_user = 1;
                $rev = Review::where('product_id', $product->id)->where('user_id', Auth::guard('web')->user()->id)->first();
                if (!$rev) {
                    $product->order_id = $review_user->id ?? 0;
                    $product->order_user = 1;
                } else {
                    $product->order_id = 0;
                    $product->order_user = 0;
                }
            } else {
                $product->review_user = 0;
                $product->order_user = 0;
            }
        } else {
            $product->review_user = 0;
            $product->order_user = 0;
        }
        $data['ads'] = Ads::where('page', 'detail_product')
            ->whereNull('deleted_at')->select('id', 'image', 'page', 'section')
            ->orderByDesc('id')->latest()->first();

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
        $review->rating = (int) $request->rating;
        $review->text = $request->text;
        $images = [];
        if (!empty($request->image)) {
            foreach ($request->image as $img) {
                if (isset($img) && is_uploaded_file($img)) {
                    $images[] = uploadFoto($img, 'uploads/reviews/' . $user->id);
                } else if (!empty($img)) {
                    $dirImage = lypsisRemoveHost($img);
                    $images[] = $dirImage;
                }
            }
        }
        $review->images = $images;
        $review->save();
        return response()->json([
            "status" => "success",
            "message" => "Berhasil menambahkan Ulasan",
        ]);
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

    private function getAds($section)
    {
        return  Ads::where('page', 'all_product')->where('section', $section)
            ->whereNull('deleted_at')->select('id', 'image', 'page', 'section')
            ->first();
    }
}
