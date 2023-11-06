<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function products(Request $request)
    {
        $query = Product::with(['seller'])->withAvg('reviews', 'rating')
            ->withSum(['order_items as total_sell' => function ($query) {
                $query->whereHas('order', function ($query) {
                    $query->where('status', 'done');
                });
            }], 'quantity');

        $filtered = false;

        if ($request->filled('rating')) {
            // $query->having('reviews_avg_rating', '>=', $request->input('rating'));
            $query->orderByDesc('reviews_avg_rating');
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

        if ($filtered == false) {
            $query->inRandomOrder();
        }

        $products = $query->paginate(15);
        return ProductResource::collection($products);
    }

    public function show(Product $product)
    {

        $product->load(['category', 'variants' => function ($query) {
            $query->withoutGlobalScope('hasParentRelation');
        }, 'seller', 'reviews.user']);

        $product->loadAvg('reviews', 'rating');
        $product->loadCount(['reviews']);
        // product loadCount or loadSum reviews on images(array) - for counting total images

        $product->loadSum(['order_items as total_sell' => function ($query) {
            $query->whereHas('order', function ($query) {
                $query->where('status', 'done');
            });
        }], 'quantity');

        $totalImages = 0;
        foreach ($product->reviews as $review) {
            $images = json_decode($review->images, true);
            if ($images !== null) {
                $totalImages += count($images);
            }
        }

        $product->total_images = $totalImages;

        // return ResponseAPI($product);

        $data['product'] = new ProductResource($product);

        /* $data['total_sell'] = OrderItem::where('product_id', $product->id)->whereHas('order', function ($query) {
            $query->where('status', 'done');
        })->sum('quantity'); */

        $user = auth()->guard('api-client')->user();
        if ($user != null) {
            $buyerAddress = $user->addresses()->where('main', true)->firstOrFail();
            $sellerAddress = $product->seller->addresses()->where('main', true)->firstOrFail();

            $data['delivery_service'] = checkShippingPrice($buyerAddress->ro_subdistrict_id, $sellerAddress->ro_subdistrict_id, $product->weight, true);
        }

        $relatedProductsByCategory = Product::where('category_id', $product->category_id)
            ->whereNot('id', $product->id)
            ->inRandomOrder()
            ->take(7)
            ->get();

        $data['related_products'] = ProductResource::collection($relatedProductsByCategory);

        $productsFromSameSeller = Product::where('seller_id', $product->seller_id)
            ->whereNot('id', $product->id)
            ->inRandomOrder()
            ->take(7)
            ->get();

        $data['products_from_same_seller'] = ProductResource::collection($productsFromSameSeller);


        return $data;
    }

    // create function sellerMyProducts
    public function sellerMyProducts()
    {
        $userAuthed = auth()->guard('api-client');
        $products = Product::where('seller_id', $userAuthed->id())->paginate(15);
        return ProductResource::collection($products);
    }

    // create storeOrUpdateProduct function
    public function storeOrUpdateProduct(Request $request)
    {
        $user = auth()->guard('api-client')->user();

        $this->validate($request, [
            'name' => 'required|string|max:255',
            'category_id' => 'required',
            'price' => 'required|integer',
            'stock' => 'required|integer',
            'images' => 'required',
            'images.*.file' => 'required',
            'unit' => 'required|string|max:255',
            'description' => 'required|string',
            '' => 'nullable|integer|min:1|max:100'
        ]);

        $images = [];
        $isCreate = false;

        if ($request->filled('id')) {
            $product = Product::find($request->id);
        } else {
            $product = new Product();
            $isCreate = true;
        }

        if (!empty($request->images)) {
            foreach ($request->images as $img) {
                if (isset($img) && is_uploaded_file($img)) {
                    $images[] = uploadFoto($img, 'uploads/products/' . $user->id);
                } else if (isset($img)) {
                    $images[] = $img;
                }
            }
        }

        $product->name = $request->name;
        $product->category_id = $request->category_id;
        $product->slug = Str::slug($request->name);
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->unit = $request->unit;
        $product->description = $request->description;
        $product->discount = $request->discount;
        $product->images = $images;
        $product->save();

        if ($isCreate) {
            return ResponseAPI("Product berhasil disimpan.");
        } else {
            return ResponseAPI("Product berhasil diperbarui.");
        }
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return ResponseAPI('Product berhasil dihapus.');
    }
}
