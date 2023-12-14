<?php

namespace App\Http\Controllers\Clients\seller;

use App\Http\Controllers\Controller;
use App\Http\Resources\NotificationResource;
use App\Models\Address;
use App\Models\Category;
use App\Models\Notification;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function getCommonData()
    {

        if (Auth::guard('web')->user() && Auth::guard('web')->user()->id) {
            $notifications = Notification::where('user_id', Auth::guard('web')->user()->id)->orderBy('created_at', 'desc')->take(4)->get();
            $data['notification'] = NotificationResource::collection($notifications);
            $data['notif_count'] = Notification::where('user_id', Auth::guard('web')->user()->id)->count();

        } else {
            $data['notification'] = null;
            $data['notif_count'] = 0;
        }

        return $data;
    }


    public function allProduct(Request $request)
    {
        $product = Product::when($request->filled('search'), function ($q) use ($request) {
            return $q->where('name', 'like', "%$request->search%");
        })->when($request->filled('category_id'), function ($q) use ($request) {
            return $q->where('category_id', $request->category_id);
        })->withCount('variants')
            ->where('seller_id', Auth::guard('web')->user()->id)->whereNull('parent_id')
            ->with('category:id,name')->orderBy('id', $request->orderBy ?? 'desc')->paginate(10);
        $data = $this->getCommonData();

        $data['categories_product'] = Category::whereNull('deleted_at')->withCount('products')->whereHas('products', function ($q) {
            $q->where('seller_id', Auth::guard('web')->user()->id);
        })->select('id', 'name')->get();
        return view('clients.seller.product.all', ['products' => $product, 'data' => $data]);
    }
    public function addProduct(Request $request)
    {
        $data = $this->getCommonData();
        $data['categories'] = Category::whereNull('deleted_at')->get();
        $data['sub_category'] = '';
        $user = Auth::guard('web')->user();

        $user->load('address_seller');
        if ($user->address_seller == null) {
            return redirect("/toko/semua-produk")->with('error', 'Penjual wajib mengisi data alamat toko terlebih dahulu')->with('auth', base64_encode($user->uid));
        } else if ($user->is_seller_active != true || $user->is_seller_active != 1) {
            return redirect("/toko/profil")->with('error', 'Penjual wajib mengaktifkan status Toko')->with('auth', base64_encode($user->uid));
        }
        return view('clients.seller.product.add', ['product' => null, 'data' => $data]);
    }
    public function editProduct(Request $request)
    {
        $user = Auth::guard('web')->user();
        $data = $this->getCommonData();

        $data['categories'] = Category::whereNull('deleted_at')->get();
        $product = Product::where('id', $request->id)->where('seller_id', $user->id)->first();
        if (!$product)
            return redirect("/toko/semua-produk")->with('error', 'Produk tidak ditemukan')->with('auth', base64_encode($user->uid));
        $user = Auth::guard('web')->user();

        $user->load('address_seller');
        if ($user->address_seller == null) {
            return redirect("/toko/semua-produk")->with('error', 'Penjual wajib mengisi data alamat toko terlebih dahulu')->with('auth', base64_encode($user->uid));
        } else if ($user->is_seller_active != true || $user->is_seller_active != 1) {
            return redirect("/toko/profil")->with('error', 'Penjual wajib mengaktifkan status Toko')->with('auth', base64_encode($user->uid));
        }
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
        $data = $this->getCommonData();

        $data['categories'] = Category::whereNull('deleted_at')->get();
        $product = Product::where('id', $request->id)->where('seller_id', $user->id)->with('variants')->select('id', 'name', 'seller_id')->withCount('variants')->first();
        if (!$product)
            return redirect("/toko/semua-produk")->with('error', 'Produk tidak ditemukan')->with('auth', base64_encode($user->uid));
        $user = Auth::guard('web')->user();

        $user->load('address_seller');
        if ($user->address_seller == null) {
            return redirect("/toko/semua-produk")->with('error', 'Penjual wajib mengisi data alamat toko terlebih dahulu')->with('auth', base64_encode($user->uid));
        } else if ($user->is_seller_active != true || $user->is_seller_active != 1) {
            return redirect("/toko/profil")->with('error', 'Penjual wajib mengaktifkan status Toko')->with('auth', base64_encode($user->uid));
        }
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
                return ResponseAPI('Penjual wajib mengisi alamat toko terlebih dahulu', 404);
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
            return ResponseAPI('Gagal menginput,berat tidak sesuai.', 404);
        }
        if ($request->filled('price'))
            $product->price = (int) preg_replace("/[^0-9]/", "", $request->price);
        if ($product->price == 0) {
            return ResponseAPI('Gagal menginput,harga tidak sesuai.', 404);
        }
        if ($request->filled('stock'))
            $product->stock = (int) preg_replace("/[^0-9]/", "", $request->stock);
        if ($product->stock == 0) {
            return ResponseAPI('Gagal menginput,stok minimal 1.', 404);
        }
        if ($request->filled('unit'))
            $product->unit = $request->unit;
        if ($request->filled('description'))
            $product->description = $request->description;
        if ($request->filled('discount'))
            $product->discount = $request->discount;
        $product->seller_id = $user->id;
        $product->save();
        return response()->json([
            "status" => "success",
            "message" => $isCreate ? "Produk berhasil disimpan." : "Produk berhasil diperbarui.",
            "redirect" => route('dashboardSeller.allProduct') . '?auth=' . base64_encode($user->uid)
        ], 200, [], JSON_UNESCAPED_SLASHES);
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
        $isCreate = !$request->filled('id');

        if ($isCreate) {
            $user->load('address_seller');

            if ($user->address_seller == null) {
                return ResponseAPI('Penjual wajib mengisi alamat toko terlebih dahulu', 404);
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
                $images = [];
                if (empty($variant['id'])) {
                    $theVariant = $productParent->replicate();
                    $productName;
                    if (isset($variant['images'])) {
                        $images[] = uploadFoto($variant['images'], 'uploads/products/' . $user->id);
                    }
                    $image = $images ?? null;
                    $theVariant->parent_id = $productParent->id;
                    $theVariant->name = $productName;
                    $theVariant->category_id = $productParent->sub_category_id ? $productParent->category_id : Category::first()->pluck('id') ?? 1;
                    $theVariant->sub_category_id = $productParent->sub_category_id ? $productParent->sub_category_id : SubCategory::first()->pluck('id') ?? 1;
                    $theVariant->slug = Str::slug($theVariant->name);
                    $theVariant->images = $image ?? null;
                    $theVariant->weight = (int) preg_replace("/[^0-9]/", "", $variant['weight']);
                    if ($theVariant->weight == 0) {
                        return ResponseAPI('Gagal menginput,berat tidak sesuai.', 404);
                    }
                    $theVariant->price = (int) preg_replace("/[^0-9]/", "", $variant['price']);
                    if ($theVariant->price == 0) {
                        return ResponseAPI('Gagal menginput,harga tidak sesuai.', 404);
                    }
                    $theVariant->stock = (int) preg_replace("/[^0-9]/", "", $variant['stock']);
                    if ($theVariant->stock == 0) {
                        return ResponseAPI('Gagal menginput,stok minimal 1.', 404);
                    }

                    $theVariant->discount = null;
                    $theVariant->save();
                } else {
                    $theVariant = Product::where('parent_id', $productParent->id)->where('id', $variant['id'])
                        ->firstOrFail();
                    $productName;
                    if (isset($variant['images'])) {
                        $images[] = uploadFoto($variant['images'], 'uploads/products/' . $user->id);
                    }
                    $image = $images ?? null;
                    $weight = (int) preg_replace("/[^0-9]/", "", $variant['weight']);
                    if ($weight == 0) {
                        return ResponseAPI('Gagal menginput,berat tidak sesuai.', 404);
                    }
                    $price = (int) preg_replace("/[^0-9]/", "", $variant['price']);
                    if ($price == 0) {
                        return ResponseAPI('Gagal menginput,harga tidak sesuai.', 404);
                    }
                    $stock = (int) preg_replace("/[^0-9]/", "", $variant['stock']);
                    if ($stock == 0) {
                        return ResponseAPI('Gagal menginput,stok minimal 1.', 404);
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

            return response()->json([
                "status" => "success",
                "message" => $isCreate ? "Berhasil menambah varian produk." : "Berhasil mengubah varian produk.",
                "redirect" => route('dashboardSeller.allProduct') . '?auth=' . base64_encode($user->uid)
            ], 200, [], JSON_UNESCAPED_SLASHES);
        } catch (\Exception $e) {

            DB::rollback();
            $message = 'Gagal melakukan operasi. ' . $e->getMessage();
            return ResponseAPI($message);
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
