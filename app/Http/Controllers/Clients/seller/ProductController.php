<?php

namespace App\Http\Controllers\Clients\seller;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

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
        return view('clients.seller.product.add', ['product' => null, 'data' => $data]);
    }
    public function editProduct(Request $request)
    {
        $data['categories'] = Category::whereNull('deleted_at')->get();
        $product = Product::where('id', $request->id)->firstOrFail();
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
    public function deleteProduct($id)
    {
        $user = Auth::guard('web')->user();
        $ad = Product::where('id', $id)->firstOrFail();
        $ad->delete();
        return redirect()->route('dashboardSeller.allProduct')->with('success', 'Produk berhasil dihapus')->with('auth', base64_encode($user->uid));
    }
}
