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
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function allProduct(Request $request)
    {
        $product = Product::when($request->filled('search'), function ($q) use ($request) {
            return $q->where('name', 'like', "%$request->search%");
        })->when($request->filled('category_id'), function ($q) use ($request) {
            return $q->where('category_id', $request->category_id);
        })->withCount('variants')->where('seller_id', Auth::guard('web')->user()->id)->whereNull('parent_id')->with('category:id,name')->orderBy('id', $request->orderBy ?? 'desc')->paginate(10);
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
        $user = Auth::guard('web')->user();

        $data['categories'] = Category::whereNull('deleted_at')->get();
        $product = Product::where('id', $request->id)->firstOrFail();
        if (!$product)
            return redirect("/toko/semua-produk")->with('danger', 'Produk tidak ditemukan')->with('auth', base64_encode($user->uid));

        if ($product->category_id != null) {
            $data['sub_category'] = SubCategory::where('category_id', $product->category_id)->select('id', 'name', 'category_id')->get();
        } else {
            $data['sub_category'] = '';
        }

        return view('clients.seller.product.add', ['product' => $product, 'data' => $data]);
    }
    public function variantProduct(Request $request)
    {
        $user = Auth::guard('web')->user();

        $data['categories'] = Category::whereNull('deleted_at')->get();
        $product = Product::where('id', $request->id)->with('variants')->select('id','name')->withCount('variants')->firstOrFail();
        if (!$product)
            return redirect("/toko/semua-produk")->with('danger', 'Produk tidak ditemukan')->with('auth', base64_encode($user->uid));

        if ($product->category_id != null) {
            $data['sub_category'] = SubCategory::where('category_id', $product->category_id)->select('id', 'name', 'category_id')->get();
        } else {
            $data['sub_category'] = '';
        }
        return view('clients.seller.product.variant', ['product' => $product, 'data' => $data]);
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
            $user->load('address_seller');

            if ($user->address_seller == null) {
                return redirect("/toko/semua-produk")->with('danger', 'Penjual wajib mengisi data alamat toko terlebih dahulu')->with('auth', base64_encode($user->uid));
            }
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

    public function addUpdateProductVariant(Request $request)
    {
        $user = auth()->guard('web')->user();

        $validator = Validator::make($request->all(), [
            'variants.*.name' => 'required',
            'variants.*.price' => 'required',
            'variants.*.stock' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        dd($request->variants);
        $isCreate = !$request->filled('id');

        if ($isCreate) {
            $user->load('address_seller');

            if ($user->address_seller == null) {
                return redirect("/toko/semua-produk")
                    ->with('danger', 'Penjual wajib mengisi data alamat toko terlebih dahulu')
                    ->with('auth', base64_encode($user->uid));
            }

            $productParent = new Product();
        } else {
            $productParent = Product::find($request->id);
        }

        $variants = $request->variants;
        DB::beginTransaction();

        try {
            foreach ($variants as $key => $variant) {
                $productName = $variant['name'];

                if (empty($variant['id'])) {
                    $theVariant = $productParent->replicate();
                    $productName .= " AA";
                    if (isset($variant['images'])) {
                        $image = uploadFoto($variant['images'], 'uploads/products/' . $user->id);
                    } else {
                        $image = null;
                    }

                    $theVariant->parent_id = $productParent->id;
                    $theVariant->name = $productName;
                    $theVariant->slug = null;
                    $theVariant->images = $image;
                    $theVariant->weight = (int) preg_replace("/[^0-9]/", "", $variant['weight']);
                    if ($theVariant->weight == 0) {
                        return redirect("/toko/semua-produk")->with('danger', 'Gagal menginput,berat tidak sesuai.')->with('auth', base64_encode($user->uid));
                    }
                    $theVariant->price = (int) preg_replace("/[^0-9]/", "", $variant['price']);
                    if ($theVariant->price == 0) {
                        return redirect("/toko/semua-produk")->with('danger', 'Gagal menginput,harga tidak sesuai.')->with('auth', base64_encode($user->uid));
                    }
                    $theVariant->stock = (int) preg_replace("/[^0-9]/", "", $variant['stock']);
                    if ($theVariant->stock == 0) {
                        return redirect("/toko/semua-produk")->with('danger', 'Gagal menginput,stok minimal 1.')->with('auth', base64_encode($user->uid));
                    }

                    $theVariant->discount = null;
                    $theVariant->save();
                } else {
                    $theVariant = Product::where('parent_id', $productParent->id)->where('id', $variant['id'])
                        ->firstOrFail();
                    $productName .= " BB";
                    if (isset($variant['images'])) {
                        $image = uploadFoto($variant['images'], 'uploads/products/' . $user->id);
                    } else {
                        $image = null;
                    }
                    $weight = (int) preg_replace("/[^0-9]/", "", $variant['weight']);
                    if ($weight == 0) {
                        return redirect("/toko/semua-produk")->with('danger', 'Gagal menginput,berat tidak sesuai.')->with('auth', base64_encode($user->uid));
                    }
                    $price = (int) preg_replace("/[^0-9]/", "", $variant['price']);
                    if ($price == 0) {
                        return redirect("/toko/semua-produk")->with('danger', 'Gagal menginput,harga tidak sesuai.')->with('auth', base64_encode($user->uid));
                    }
                    $stock = (int) preg_replace("/[^0-9]/", "", $variant['stock']);
                    if ($stock == 0) {
                        return redirect("/toko/semua-produk")->with('danger', 'Gagal menginput,stok minimal 1.')->with('auth', base64_encode($user->uid));
                    }

                    $theVariant->update([
                        'name' => $productName,
                        'slug' => null,
                        'images' => $image ?? null,
                        'price' => $price,
                        'stock' => $stock,
                        'weight' => $weight,
                        'discount' =>  null,
                    ]);
                }
            }
            $deletedItemsIds = json_decode($request->deletedItemsIds, true);

            if (!empty($deletedItemsIds)) {
                Product::whereIn('id', $deletedItemsIds)->delete();
            }

            DB::commit();

            $message = $isCreate ? 'Berhasil menambah varian produk.' : 'Berhasil mengubah varian produk.';
            $redirectPath = "/toko/semua-produk";
            $withData = ['success' => $message, 'auth' => base64_encode($user->uid)];
        } catch (\Exception $e) {
            DB::rollback();
            $message = 'Gagal melakukan operasi. ' . $e->getMessage();
            $redirectPath = back()->getTargetUrl(); // Redirect back to the previous page
            $withData = ['error' => $message];
        }

        return redirect($redirectPath)->with($withData);
    }


    public function deleteProduct($id)
    {
        $user = Auth::guard('web')->user();
        $ad = Product::where('id', $id)->firstOrFail();
        $ad->delete();
        return redirect()->route('dashboardSeller.allProduct')->with('success', 'Produk berhasil dihapus')->with('auth', base64_encode($user->uid));
    }
}
