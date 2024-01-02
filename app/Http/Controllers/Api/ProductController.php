<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Models\MasterAccount;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

            $

        $query->byNotVariant();
        $filtered = false;

        if ($request->filled('rating')) {
            // $query->having('reviews_avg_rating', '>=', $request->input('rating'));
            $query->orderByDesc('reviews_avg_rating');
            $filtered = true;
        }

        if ($request->filled('seller_id')) {
            $query->where('seller_id', $request->seller_id);
            $filtered = true;
        }

        if ($request->filled('category_id')) {
            // dd($request->category_id);
            $query->where('category_id', (int)$request->category_id);
            $filtered = true;
        }

        if ($request->filled('sub_category_id')) {
            $query->where('sub_category_id', (int)$request->sub_category_id);
            $filtered = true;
        }

        // if request filled promo
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

        if ($request->filled('search')) {
            $query->where('name', 'LIKE', "%$request->search%");
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
        $product->load(['category', 'sub_category', 'variants', 'seller.address_seller']);

        $product->loadAvg('reviews', 'rating');
        $product->loadCount(['reviews']);
        // product loadCount or loadSum reviews on images(array) - for counting total images

        $product->loadSum(['order_items as total_sell' => function ($query) {
            $query->whereHas('order', function ($query) {
                $query->where('status', 'done');
            });
        }], 'quantity');


        $totalImages2 = DB::table('reviews')
            ->selectRaw('SUM(JSON_LENGTH(images)) as total_images')
            ->where('product_id', $product->id)
            ->first()
            ->total_images;

        $product->total_images = (int)$totalImages2;

        // return ResponseAPI($product);

        $data['product'] = new ProductResource($product);

        /* $data['total_sell'] = OrderItem::where('product_id', $product->id)->whereHas('order', function ($query) {
            $query->where('status', 'done');
        })->sum('quantity'); */

        $productIds = Product::where('seller_id', $product->seller_id)->pluck('id');
        $averageRating = Review::whereIn('product_id', $productIds)->avg('rating');

        $data['rating_seller'] = doubleVal($averageRating);

        $user = auth()->guard('api-client')->user();
        $data['is_wishlisted'] = false;
        if ($user != null && $product->seller_id != null) {
            $buyerAddress = $user->addresses()->where('main', true)->first();
            $sellerAddress = $product->seller->addresses()->where('main', true)->first();
            if ($buyerAddress != null && $sellerAddress != null) {
                try {
                    $data['delivery_service'] = lypsisCheckShippingPrice($sellerAddress->ro_city_id, $buyerAddress->ro_subdistrict_id,  $product->weight);
                } catch (\Throwable $th) {
                    $data['delivery_service'] = null;
                }
            } else {
                $data['delivery_service'] = null;
            }

            $data['is_wishlisted'] = $product->usersWishlisted()->where('user_id', $user->id)->exists();
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

    public function showSimple(Product $product)
    {
        $product->load(['variants.parent']);
        $user = auth()->guard('api-client')->user();
        $product['is_wishlisted'] = false;
        if ($user != null && $product->seller_id != null) {
            $product['is_wishlisted'] = $product->usersWishlisted()->where('user_id', $user->id)->exists();
        }

        return ResponseAPI($product);
    }

    public function sellerMyProducts()
    {
        $userAuthed = auth()->guard('api-client');
        $products = Product::where('seller_id', $userAuthed->id())->byNotVariant()->paginate(15);
        return ProductResource::collection($products);
    }

    // create storeOrUpdateProduct function
    public function storeOrUpdateProduct(Request $request)
    {
        $user = auth()->guard('api-client')->user();



        $this->validate($request, [
            'name' => 'required|string|max:255',
            'category_id' => 'required',
            'sub_category_id' => 'nullable',
            'price' => 'required|integer',
            'stock' => 'required|integer',
            'weight' => 'required|integer|min:1',
            'images' => 'required',
            // 'images.*.file' => 'required',
            // 'unit' => 'required|string|max:255',
            'description' => 'required|string',
            // '' => 'nullable|integer|min:1|max:100'
        ]);

        $images = [];
        $isCreate = false;

        if ($request->filled('id')) {
            $product = Product::find($request->id);
        } else {
            $user->load('address_seller');

            if ($user->address_seller == null) {
                return ResponseAPI('Penjual wajib mengisi data alamat toko terlebih dahulu', 422);
            }
            $product = new Product();
            $isCreate = true;
        }

        if (!empty($request->images)) {
            foreach ($request->images as $img) {
                if (isset($img) && is_uploaded_file($img)) {
                    $images[] = uploadFoto($img, 'uploads/products/' . $user->id);
                } else if (!empty($img)) {
                    $dirImage = lypsisRemoveHost($img);
                    $images[] = $dirImage;
                }
            }
        }

        $product->name = $request->name;
        $product->category_id = $request->category_id;

        if ($request->filled('sub_category_id')) {
            $product->sub_category_id = $request->sub_category_id;
        }
        $product->seller_id = $user->id;
        $product->slug = Str::slug($request->name);
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->weight = $request->weight;
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

    public function storeOrUpdateProductVariant(Product $productParent, Request $request)
    {
        $user = auth()->guard('api-client')->user();

        $this->validate($request, [
            'variants.*.name' => 'required',
            'variants.*.price' => 'required',
            'variants.*.stock' => 'required',
            'variant_images.*' => 'required',
        ]);


        $variants = json_decode($request->variants, true);
        $variantImages = $request->variant_images;
        DB::beginTransaction();

        // dd($variants);
        foreach ($variants as $key => $variant) {
            $productName = $variant['name'];
            $image = null;
            $theImageItem = $variantImages[$key] ?? null;

            if (empty($variant['id'])) {
                $theVariant = $productParent->replicate();
                $productName .= " AA";
                if (isset($theImageItem) && is_uploaded_file($theImageItem)) {
                    $image = uploadFoto($theImageItem, 'uploads/products/' . $user->id);
                    $image = [$image];
                }

                $theVariant->parent_id = $productParent->id;
                $theVariant->name = $productName;
                $theVariant->slug = null;
                $theVariant->images = $image;
                $theVariant->price = $variant['price'];
                $theVariant->weight = $variant['weight'];
                $theVariant->stock = $variant['stock'];
                $theVariant->discount = $variant['discount'] ?? null;
                $theVariant->save();
            } else {
                $theVariant = Product::where('parent_id', $productParent->id)->where('id', $variant['id'])
                    ->firstOrFail();
                $productName .= " BB";
                if (isset($theImageItem) && is_uploaded_file($theImageItem)) {
                    $image = uploadFoto($theImageItem, 'uploads/products/' . $user->id);
                    $image = [$image];
                } else if (!empty($theImageItem)) {
                    $image = $theVariant->images;
                }

                $theVariant->update([
                    'name' => $productName,
                    'slug' => null,
                    'images' => $image ?? null,
                    'price' => $variant['price'],
                    'stock' => $variant['stock'],
                    'weight' => $variant['weight'],
                    'discount' => $variant['discount'] ?? null,
                ]);
            }
        }

        // $deletedItemsIds = $request->deletedItemsIds;
        $deletedItemsIds = json_decode($request->deletedItemsIds, true);
        // dd($deletedItemsIds);
        if (!empty($deletedItemsIds) && count($deletedItemsIds) > 0) {
            /* $a = Product::whereIn('id', $deletedItemsIds)->get()->toArray();
            dd($a); */
            Product::whereIn('id', $deletedItemsIds)->delete();
        }

        DB::commit();

        return ResponseAPI("Manajemen variasi produk telah berhasil.", 200);
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return ResponseAPI('Product berhasil dihapus.');
    }
}
