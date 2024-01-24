<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ArticleResource;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\ProductResource;
use App\Http\Resources\SliderResource;
use App\Http\Resources\SubCategoryResource;
use App\Models\Article;
use App\Models\Category;
use App\Models\Notification;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\Slider;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{    
    

    public function home()
    {
        $latestProducts = Product::with(['category', 'seller'])->byNotVariant()->latest()->take(10)->get();
        $limitedProducts = Product::with(['category', 'seller'])->byNotVariant()->inRandomOrder()->take(10)->get();
        $promoProducts = Product::with(['category', 'seller'])->byNotVariant()->whereNotNull('discount')->inRandomOrder()->take(10)->get();
        $bestSellerProducts = Product::with(['category', 'seller'])
            ->addSelect([
                'total_quantity' => OrderItem::selectRaw('sum(quantity)')
                    ->whereColumn('product_id', 'products.id')
                    ->join('orders', 'order_items.order_id', '=', 'orders.id')
                    ->where('orders.status', 'Completed')
            ])->byNotVariant()
            ->orderByDesc('total_quantity')
            ->take(10)
            ->get();

        // $recommendedProducts = Product::with(['category', 'parent'])
        //     ->whereHas('order_items.order', function ($query) {
        //         $query->where('status', 'Completed');
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
        $data['best_seller_product'] = ProductResource::collection($bestSellerProducts);
        $data['recommended_products'] = ProductResource::collection($limitedProducts);
        $data['promo_products'] = ProductResource::collection($promoProducts);
        $data['articles'] = ArticleResource::collection($articles);

        return ResponseAPI($data);
    }

    // function statsCount
    public function statsCount()
    {
        $user = auth()->guard('api-client')->user();
        if ($user != null) {
            $data['notification_counted'] = Notification::count();
        } else {
            $data['notification_counted'] = 0;
        }
        return ResponseAPI($data);
    }

    // func categories
    public function categories()
    {
        $categories = Category::with('sub_categories')->get();
        return CategoryResource::collection($categories);
    }

    public function justCategories()
    {
        $categories = Category::all();
        return CategoryResource::collection($categories);
    }

    public function subCategories()
    {
        $subCategories = SubCategory::all();
        return SubCategoryResource::collection($subCategories);
    }

    public function contactAndInfo()
    {
        $data['whatsapp_cs'] = lypsisGetSetting('whatsapp_cs');
        return ResponseAPI($data);
    }
}
