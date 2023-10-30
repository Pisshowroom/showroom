<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function products()
    {
        $products = Product::inRandomOrder()->paginate(15);
        return ProductResource::collection($products);
    }

    public function show(Product $product)
    {   
        return new ProductResource($product);
    }
}
