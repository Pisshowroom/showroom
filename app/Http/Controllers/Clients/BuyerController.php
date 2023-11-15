<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use App\Http\Resources\ArticleResource;
use App\Http\Resources\MasterAccountResource;
use App\Http\Resources\ProductResource;
use App\Http\Resources\SliderResource;
use App\Models\Address;
use App\Models\Article;
use App\Models\Category;
use App\Models\MasterAccount;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BuyerController extends Controller
{
    public function getCommonData()
    {
        $data['categories'] = Category::all();

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

    public function home(Request $request)
    {
        // $recommendedProducts = Product::with(['category', 'parent'])
        //     ->whereHas('order_items.order', function ($query) {
        //         $query->where('status', 'done');
        //     })
        //     ->havingRaw('COUNT(order_items.id) > 0')
        //     ->orderByDesc('order_items_count')
        //     ->take(10)
        //     ->get();


        $sliders = Slider::all();
        // limitted 5 article latest
        $articles  = Article::latest()->take(4)->get();
        $latestProducts = Product::with(['category', 'seller'])->byNotVariant()->latest()->take(8)->get();
        $limitedProducts = Product::with(['category', 'seller'])->byNotVariant()->inRandomOrder()->take(8)->get();
        $promoProducts = Product::with(['category', 'seller'])->byNotVariant()->whereNotNull('discount')->inRandomOrder()->take(8)->get();
        $bestSellerProducts = Product::with(['category', 'seller'])
            ->addSelect([
                'total_quantity' => OrderItem::selectRaw('sum(quantity)')
                    ->whereColumn('product_id', 'products.id')
                    ->join('orders', 'order_items.order_id', '=', 'orders.id')
                    ->where('orders.status', 'done')
            ])->byNotVariant()
            ->orderByDesc('total_quantity')
            ->take(10)
            ->get();
        $data = $this->getCommonData();
        $data['sliders'] = SliderResource::collection($sliders);
        $data['latest_product'] = ProductResource::collection($latestProducts);
        $data['limited_product'] = ProductResource::collection($limitedProducts);
        $data['best_seller_product'] = ProductResource::collection($bestSellerProducts);
        $data['recommended_products'] = ProductResource::collection($limitedProducts);
        $data['promo_products'] = ProductResource::collection($promoProducts);
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
        $data = $this->getCommonData();
        $masterAccounts = MasterAccount::whereIn('type', ['Virtual-Account', 'E-Wallet', 'Retail-Outlet'])
            ->orderBy('type')
            ->get();
        $data['address'] = Address::where('user_id', Auth::guard('web')->user()->id)->whereNull('deleted_at')
            ->select('id', 'user_id', 'main', 'place_name', 'person_name', 'phone_number', 'district', 'city')
            ->get();
        $data['master_account'] = MasterAccountResource::collection($masterAccounts);

        return view('clients.buyer.user.checkout', ['data' => $data]);
    }
    public function cart()
    {
        $data = $this->getCommonData();
        return view('clients.buyer.user.cart', ['data' => $data]);
    }

    public function wishlist()
    {
        $data = $this->getCommonData();
        return view('clients.buyer.user.wishlist', ['data' => $data]);
    }
}
