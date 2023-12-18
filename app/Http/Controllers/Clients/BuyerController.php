<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use App\Http\Resources\ArticleResource;
use App\Http\Resources\MasterAccountResource;
use App\Http\Resources\NotificationResource;
use App\Http\Resources\ProductResource;
use App\Http\Resources\SliderResource;
use App\Models\Address;
use App\Models\Ads;
use App\Models\Article;
use App\Models\Category;
use App\Models\MasterAccount;
use App\Models\Notification;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\Setting;
use App\Models\Slider;
use App\Models\SubCategory;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BuyerController extends Controller
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

    public function home(Request $request)
    {

        $sliders = Slider::all();
        // limitted 5 article latest
        $articles  = Article::latest()->take(4)->get();
        $latestProducts = Product::with([
            'category', 'seller:id,name,seller_slug,seller_name',
            'seller.address:id,user_id,for_seller,main,city',
        ])->byNotVariant()->latest()->take(8)->get();
        $latestProducts2 = Product::with([
            'category', 'seller:id,name,seller_slug,seller_name',
            'seller.address:id,user_id,for_seller,main,city',
        ])->byNotVariant()->latest()->skip(8)->take(8)->get();
        $data = $this->getCommonData();
        $data['sliders'] = SliderResource::collection($sliders);
        $data['latest_product'] = ProductResource::collection($latestProducts);
        $data['latest_product2'] = ProductResource::collection($latestProducts2);
        $data['limited_product'] = $this->limitedProducts();
        $data['best_seller_product'] = $this->bestSellerProducts();
        $data['best_seller_product2'] = $this->bestSellerProducts2();
        $data['recommended_products'] = $this->limitedProducts();
        $data['recommended_products2'] = $this->limitedProducts();
        $data['promo_products'] = $this->promoProducts();
        $data['promo_products2'] = $this->promoProducts();
        $data['ads1'] = $this->getAds('side_slider', 2);
        $data['ads2'] = $this->getAds('right_end_slider', 2);
        $data['ads3'] = $this->getAds2('under_discount_products');
        $data['ads4'] = $this->getAds2('above_recommended_products');
        $data['ads5'] = $this->getAds('above_best_selling_products', 3);
        $data['ads6'] = $this->getAds('below_best_selling_products', 3);
        foreach ($data['latest_product'] as $value) {
            if ($value->discount && $value->discount > 0) {
                $value->price_discount = $value->price - ($value->price * ($value->discount / 100));
            } else {
                $value->price_discount = null;
            }
        }
        foreach ($data['latest_product2'] as $value) {
            if ($value->discount && $value->discount > 0) {
                $value->price_discount = $value->price - ($value->price * ($value->discount / 100));
            } else {
                $value->price_discount = null;
            }
        }

        $data['articles'] = ArticleResource::collection($articles);
        return view('clients.buyer.home', ['data' => $data]);
    }


    public function notFound()
    {
        $data = $this->getCommonData();
        return view('clients.buyer.error404', ['data' => $data]);
    }
    public function contact()
    {
        $data = $this->getCommonData();
        return view('clients.buyer.contact', ['data' => $data]);
    }
    public function privacy()
    {
        $data = $this->getCommonData();
        return view('clients.buyer.privacy', ['data' => $data]);
    }
    public function termDeleteUser()
    {
        $data = $this->getCommonData();
        return view('clients.buyer.term_delete_user', ['data' => $data]);
    }


    //auth
    public function login()
    {
        $data = $this->getCommonData();
        return view('clients.buyer.auth.login', ['data' => $data]);
    }
    public function register()
    {
        $data = $this->getCommonData();
        return view('clients.buyer.auth.register', ['data' => $data]);
    }

    public function about()
    {
        $data = $this->getCommonData();
        return view('clients.buyer.about', ['data' => $data]);
    }
    public function term()
    {
        $data = $this->getCommonData();
        return view('clients.buyer.term', ['data' => $data]);
    }



    public function checkout()
    {
        if (!Auth::guard('web')->user()) {
            return redirect()->route('buyer.home');
        }
        $data = $this->getCommonData();
        $masterAccounts = MasterAccount::where('type', 'PI')->union(MasterAccount::whereIn('type', ['PI', 'Virtual-Account', 'E-Wallet', 'Retail-Outlet'])
            ->orderBy('type'))
            ->get();
        $data['address'] = Address::where('user_id', Auth::guard('web')->user()->id)->whereNull('deleted_at')
            ->select('id', 'user_id', 'main', 'place_name', 'person_name', 'phone_number', 'district', 'city')
            ->get();
        $data['master_account'] = MasterAccountResource::collection($masterAccounts);

        $setting = Setting::where("name", "pi")->first();
        if (!$setting) {
            $setting = new Setting();
            $setting->name = "pi";
            $setting->value = "4866825564.40";
            $setting->save();
        }
        $data['setting'] = $setting;

        return view('clients.buyer.user.checkout', ['data' => $data]);
    }
    public function cart()
    {
        if (!Auth::guard('web')->user()) {
            return redirect()->route('buyer.home');
        }
        $data = $this->getCommonData();

        $data['best_seller_product'] = $this->bestSellerProducts();
        $data['recommended_products'] = $this->limitedProducts();

        return view('clients.buyer.user.cart', ['data' => $data]);
    }

    public function wishlist()
    {
        if (!Auth::guard('web')->user()) {
            return redirect()->route('buyer.home');
        }
        $data = $this->getCommonData();

        $data['best_seller_product'] = $this->bestSellerProducts();
        $data['recommended_products'] = $this->limitedProducts();

        return view('clients.buyer.user.wishlist', ['data' => $data]);
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
    private function bestSellerProducts2()
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
            ->skip(8)
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
    private function promoProducts()
    {
        $promoProducts = Product::with([
            'category', 'seller:id,name,seller_slug,seller_name',
            'seller.address:id,user_id,for_seller,main,city',
        ])->byNotVariant()->whereNotNull('discount')->inRandomOrder()->take(8)->get();

        $data['promo_products'] = ProductResource::collection($promoProducts);;
        foreach ($data['promo_products'] as $value) {
            if ($value->discount && $value->discount > 0) {
                $value->price_discount = $value->price - ($value->price * ($value->discount / 100));
            } else {
                $value->price_discount = null;
            }
        }

        return $data['promo_products'];
    }
    private function getAds($section, $take)
    {
        return Ads::where('page', 'home')->where('section', $section)
            ->whereNull('deleted_at')->select('id', 'image', 'page', 'section')
            ->orderByDesc('id')->take($take)->get();
    }
    private function getAds2($section)
    {
        return Ads::where('page', 'home')->where('section', $section)
            ->whereNull('deleted_at')->select('id', 'image', 'page', 'section')
            ->latest()->first();
    }
}
