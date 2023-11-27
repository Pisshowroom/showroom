<?php

namespace App\Http\Controllers\Clients\seller;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function allProduct(Request $request)
    {
        $product = Product::when($request->filled('search'), function ($q) use ($request) {
            return $q->where('name', 'like', "%$request->search%");
        })->when($request->filled('category_id'), function ($q) use ($request) {
            return $q->where('category_id', $request->category_id);
        })->where('seller_id', Auth::guard('web')->user()->id)->whereNull('parent_id')->with('category:id,name')->orderBy('id', $request->orderBy ?? 'desc')->paginate(10);
        $data['categories_product'] = Category::whereNull('deleted_at')->withCount('products')->whereHas('products', function ($q) {
            $q->where('seller_id', Auth::guard('web')->user()->id);
        })->select('id', 'name')->get();
        return view('clients.seller.product.all', ['products' => $product, 'data' => $data]);
    }
    public function addProduct(Request $request)
    {
        $data['categories'] = Category::whereNull('deleted_at')->get();
        $data['sub_category'] = '';

        return view('clients.seller.product.add', ['product' => null, 'data' => $data]);
    }
    public function editProduct(Request $request)
    {
        $data['categories'] = Category::whereNull('deleted_at')->get();
        $product = Product::where('id', $request->id)->firstOrFail();
        if ($product->category_id != null) {
            $data['sub_category'] = SubCategory::where('category_id', $product->category_id)->select('id', 'name', 'category_id')->get();
        } else {
            $data['sub_category'] = '';
        }

        return view('clients.seller.product.add', ['product' => $product, 'data' => $data]);
    }
    public function addUpdateProduct(Request $request)
    {
        $user = Auth::guard('web')->user();

        $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required',
            // 'sub_category_id' => 'nullable',
            'price' => 'required',
            'stock' => 'required',
            // 'images' => 'required',
            // 'images.*.file' => 'required',
            'weight' => 'required',
            'unit' => 'required|string|max:255',
            'description' => 'required|string',
            // '' => 'nullable|integer|min:1|max:100'
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
            $product->images = $images;
        }
        if ($request->filled('name')) {
            $product->name = $request->name;
            $product->slug = Str::slug($request->name);
        }
        if ($request->filled('category_id'))
            $product->category_id = $request->category_id;
        if ($request->filled('sub_category_id')) {
            $product->sub_category_id = $request->sub_category_id;
        }
        if ($request->filled('weight'))
            $product->weight = (int) preg_replace("/[^0-9]/", "", $request->weight);
        if ($product->weight == 0) {
            return redirect("/toko/semua-produk")->with('danger', 'Gagal menginput,berat tidak sesuai.')->with('auth', base64_encode($user->uid));
        }
        if ($request->filled('price'))
            $product->price = (int) preg_replace("/[^0-9]/", "", $request->price);
        if ($product->price == 0) {
            return redirect("/toko/semua-produk")->with('danger', 'Gagal menginput,harga tidak sesuai.')->with('auth', base64_encode($user->uid));
        }
        if ($request->filled('stock'))
            $product->stock = (int) preg_replace("/[^0-9]/", "", $request->stock);
        if ($product->stock == 0) {
            return redirect("/toko/semua-produk")->with('danger', 'Gagal menginput,stok minimal 1.')->with('auth', base64_encode($user->uid));
        }
        if ($request->filled('unit'))
            $product->unit = $request->unit;
        if ($request->filled('description'))
            $product->description = $request->description;
        if ($request->filled('discount'))
            $product->discount = $request->discount;
        $product->seller_id = $user->id;
        $product->save();

        if ($isCreate) {
            return redirect("/toko/semua-produk")->with('success', 'Produk berhasil disimpan.')->with('auth', base64_encode($user->uid));
        } else {
            return redirect("/toko/semua-produk")->with('success', 'Produk berhasil diperbarui.')->with('auth', base64_encode($user->uid));
        }
    }

    public function storeOrUpdateProductVariant(Product $productParent, Request $request)
    {
        $user = auth()->guard('web')->user();

        $this->validate($request, [
            'variants.*.name' => 'required',
            'variants.*.price' => 'required',
            'variants.*.stock' => 'required',
        ]);

        $variants = json_decode($request->variants, true);
        DB::beginTransaction();

        // dd($variants);
        foreach ($variants as $variant) {
            $productName = $variant['name'];
            $image = null;
            if (empty($variant['id'])) {
                $theVariant = $productParent->replicate();
                $productName .= " AA";
                if (isset($variant['image']) && is_uploaded_file($variant['image'])) {
                    $image = uploadFoto($variant['image'], 'uploads/products/' . $user->id);
                    $image = [$image];
                }

                $theVariant->parent_id = $productParent->id;
                $theVariant->name = $productName;
                $theVariant->slug = null;
                $theVariant->images = $image;
                $theVariant->price = $variant['price'];
                $theVariant->stock = $variant['stock'];
                $theVariant->discount = $variant['discount'] ?? null;
                $theVariant->save();
            } else {
                $theVariant = Product::where('parent_id', $productParent->id)->where('id', $variant['id'])
                    ->firstOrFail();
                $productName .= " BB";
                if (isset($variant['image']) && is_uploaded_file($variant['image'])) {
                    $image = uploadFoto($variant['image'], 'uploads/products/' . $user->id);
                    $image = [$image];
                } else if (!empty($variant['image'])) {
                    $image = $theVariant->images;
                }

                $theVariant->update([
                    'name' => $productName,
                    'slug' => null,
                    'images' => $image ?? null,
                    'price' => $variant['price'],
                    'stock' => $variant['stock'],
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

    public function deleteProduct($id)
    {
        $user = Auth::guard('web')->user();
        $ad = Product::where('id', $id)->firstOrFail();
        $ad->delete();
        return redirect()->route('dashboardSeller.allProduct')->with('success', 'Produk berhasil dihapus')->with('auth', base64_encode($user->uid));
    }
}
