<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function index(Request $request)
    {
        $user = auth()->guard('api-client')->user();

        $perPage = $request->per_page ?? 15;

        $filtered = false;

        $query = Product::whereHas('usersWishlisted', function ($query) use ($user) {
            $query->where('user_id', $user->id);
        })
            ->when($request->filled('search'), function ($query) use ($request) {
                $query->where('name', 'like', "%$request->search%");
            });

        if ($request->filled('category_id')) {
            // dd($request->category_id);
            $query->where('category_id', (int)$request->category_id);
            $filtered = true;
        }

        if ($request->filled('sub_category_id')) {
            $query->where('sub_category_id', (int)$request->sub_category_id);
            $filtered = true;
        }

        if ($request->filled('promo')) {
            $query->whereNotNull('discount');
            $filtered = true;
        }

        if ($request->filled('latest')) {
            $query->latest();
            $filtered = true;
        }

        if ($request->filled('lowest_price')) {
            $query->orderBy('price');
            $filtered = true;
        }

        if ($request->filled('highest_price')) {
            $query->orderByDesc('price');
            $filtered = true;
        }
        $products = $query->paginate($perPage);

        return ProductResource::collection($products);
    }

    public function store(Product $product)
    {
        $user = auth()->guard('api-client')->user();

        $product->usersWishlisted()->syncWithoutDetaching($user->id);

        return response()->json([
            'message' => 'Product added to wishlist'
        ]);
    }

    public function destroy(Product $product)
    {
        $user = auth()->guard('api-client')->user();

        $product->usersWishlisted()->detach($user->id);

        return response()->json([
            'message' => 'Product removed from wishlist'
        ]);
    }
}
