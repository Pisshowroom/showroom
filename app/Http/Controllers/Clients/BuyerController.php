<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use App\Http\Resources\ArticleResource;
use App\Http\Resources\ProductResource;
use App\Http\Resources\SliderResource;
use App\Models\Article;
use App\Models\Category;
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

        $data['sliders'] = SliderResource::collection($sliders);
        $data['latest_product'] = Product::with(['category', 'seller:id,name,seller_slug'])->withCount('reviews')->whereNull('parent_id')->latest()->take(8)->get();
        $data['limited_product'] = Product::with(['category', 'seller:id,name,seller_slug'])->withCount('reviews')->whereNull('parent_id')->inRandomOrder()->take(8)->get();
        $data['recommended_products'] = Product::with(['category', 'seller:id,name,seller_slug'])->withCount('reviews')->whereNull('parent_id')->inRandomOrder()->take(8)->get();
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

    //dashboard
    public function dashboard()
    {
        return view('clients.buyer.dashboard.dashboard');
    }
}
