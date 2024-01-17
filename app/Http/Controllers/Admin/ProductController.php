<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $query = Product::with(['category']);

        $filtered = false;

        if ($filtered == false) {
            $query->orderBy("$request->col", "$request->dir");
        }
        if ($request->filled('search')) {
            $query->where('name', 'like', "%$request->search%");
            // $filtered = true;
        }

        $products = $query->paginate($request->per_page ?? 15);

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
