<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // list product can be filtered by category, sub category, promo, latest, lowest price, highest price and can be searched by name
    public function index(Request $request)
    {
        $query = Product::query();

        if ($request->filled('promo')) {
            $query->whereNotNull('discount');
        }

        if ($request->filled('lowest_price')) {
            $query->orderBy('price');
            $filtered = true;
        }

        if ($request->filled('highest_price')) {
            $query->orderByDesc('price');
            $filtered = true;
        }

        $products = $query->paginate(15);

        return $products;
    }

    public function detail(Product $product)
    {
        $product->load(['parent', 'category', 'sub_category', 'variants', 'reviews', 'order_items']);

        return $product;
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return ResponseAPI('Product deleted successfully', 200);
    }
}
