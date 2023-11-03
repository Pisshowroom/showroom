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
    public function products()
    {
        $products = Product::inRandomOrder()->paginate(15);
        return ProductResource::collection($products);
    }

    public function show(Product $product)
    {

        $product->load(['category', 'variants', 'seller', 'reviews.user']);
        $data['product'] = new ProductResource($product);

        // total_sell is order_items sum with quantity where relation to order where status is done
        $data['total_sell'] = OrderItem::where('product_id', $product->id)->whereHas('order', function ($query) {
            $query->where('status', 'done');
        })->sum('quantity');

        $user = auth()->guard('api-client')->user();
        if ($user != null) {
            $buyerAddress = $user->addresses()->where('main', true)->firstOrFail();
            $sellerAddress = $product->seller->addresses()->where('main', true)->firstOrFail();

            $data['delivery_service'] = checkShippingPrice($buyerAddress->ro_subdistrict_id, $sellerAddress->ro_subdistrict_id, $product->weight, true);
        }

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
