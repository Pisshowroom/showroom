<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ArticleResource;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\ProductResource;
use App\Http\Resources\SliderResource;
use App\Models\Article;
use App\Models\Category;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $latestProducts = Product::with(['category', 'parent'])->latest()->take(10)->get();
        $limitedProducts = Product::with(['category', 'parent'])->inRandomOrder()->take(10)->get();
        // $recommendedProducts = Product::with(['category', 'parent'])
        //     ->whereHas('order_items.order', function ($query) {
        //         $query->where('status', 'done');
        //     })
        //     ->havingRaw('COUNT(order_items.id) > 0')
        //     ->orderByDesc('order_items_count')
        //     ->take(10)
        //     ->get();


        $categories = Category::all();
        $sliders = Slider::all();
        // limitted 5 article latest
        $articles  = Article::latest()->take(5)->get();

        $data['sliders'] = SliderResource::collection($sliders);
        $data['categories'] = CategoryResource::collection($categories);
        $data['latest_product'] = ProductResource::collection($latestProducts);
        $data['limited_product'] = ProductResource::collection($limitedProducts);
        $data['recommended_products'] = ProductResource::collection($limitedProducts);
        $data['articles'] = ArticleResource::collection($articles);

        return ResponseAPI($data);
    }
}
