<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use App\Http\Resources\ArticleResource;
use App\Http\Resources\ProductResource;
use App\Http\Resources\SliderResource;
use App\Models\Article;
use App\Models\Category;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;

class BuyerController extends Controller
{
    private function categories()
    {
        return Category::all();
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
        $latestProducts = Product::with(['category', 'seller'])->latest()->take(10)->get();
        $limitedProducts = Product::with(['category', 'seller'])->inRandomOrder()->take(10)->get();
        $promoProducts = Product::with(['category', 'seller'])->whereNotNull('discount')->inRandomOrder()->take(10)->get();
        $bestSellerProducts = Product::with(['category', 'seller'])
            ->addSelect([
                'total_quantity' => OrderItem::selectRaw('sum(quantity)')
                    ->whereColumn('product_id', 'products.id')
                    ->join('orders', 'order_items.order_id', '=', 'orders.id')
                    ->where('orders.status', 'done')
            ])
            ->orderByDesc('total_quantity')
            ->take(10)
            ->get();
        $data['sliders'] = SliderResource::collection($sliders);
        $data['latest_product'] = ProductResource::collection($latestProducts);
        $data['limited_product'] = ProductResource::collection($limitedProducts);
        $data['best_seller_product'] = ProductResource::collection($bestSellerProducts);
        $data['recommended_products'] = ProductResource::collection($limitedProducts);
        $data['promo_products'] = ProductResource::collection($promoProducts);
        $data['articles'] = ArticleResource::collection($articles);
        $data['categories'] = $this->categories();
        return view('clients.buyer.home', ['data' => $data]);
    }

    //auth
    public function login()
    {
        $data['categories'] = $this->categories();
        return view('clients.buyer.auth.login', ['data' => $data]);
    }
    public function register()
    {
        $data['categories'] = $this->categories();
        return view('clients.buyer.auth.register', ['data' => $data]);
    }

    public function notFound()
    {
        $data['categories'] = $this->categories();
        return view('clients.buyer.error404', ['data' => $data]);
    }
    public function contact()
    {
        $data['categories'] = $this->categories();
        return view('clients.buyer.contact', ['data' => $data]);
    }
    public function about()
    {
        $data['categories'] = $this->categories();
        return view('clients.buyer.about', ['data' => $data]);
    }
    public function term()
    {
        $data['categories'] = $this->categories();
        return view('clients.buyer.term', ['data' => $data]);
    }

    //user
    public function checkout()
    {
        $data['categories'] = $this->categories();
        return view('clients.buyer.user.checkout', ['data' => $data]);
    }
    public function cart()
    {
        $data['categories'] = $this->categories();
        return view('clients.buyer.user.cart', ['data' => $data]);
    }

    public function wishlist()
    {
        $data['categories'] = $this->categories();
        return view('clients.buyer.user.wishlist', ['data' => $data]);
    }

}
