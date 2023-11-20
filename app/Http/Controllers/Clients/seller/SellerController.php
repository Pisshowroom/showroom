<?php

namespace App\Http\Controllers\Clients\seller;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class SellerController extends Controller
{

    public function isSeller()
    {
        return Auth::guard('web')->user()->is_seller == true;
    }
    public function dashboard(Request $request)
    {
        if (!$this->isSeller()) {
            $user = Auth::guard('web')->user();
            return redirect('/pembeli')->with('auth', base64_encode($user->uid));
        }
        $order = Order::where('seller_id', Auth::guard('web')->user()->id)
            ->whereHas('order_items', function ($q) use ($request) {
                $q->whereHas('product', function ($qq) use ($request) {
                    if ($request->filled('search'))
                        $qq->where('payment_identifier', 'like', "%$request->search%");
                    $qq->where('seller_id', Auth::guard('web')->user()->id);
                });
            })
            ->select('id', 'payment_identifier', 'user_id', 'created_at', 'status', 'payment_status', 'total', 'total_final', 'seller_id')
            ->with(['user:id,name', 'order_items:id,product_id,order_id', 'order_items.product:id,name'])
            ->orderBy('id', $request->orderBy ?? 'desc')->paginate($request->per_page ?? 10);
        foreach ($order as $key => $value) {
            if (now() > $value->payment_due)
                $value->expired = true;
            else
                $value->expired = false;
            $value->date = parseDates($value->created_at);
        }
        $data['products'] = Product::where('seller_id', Auth::guard('web')->user()->id)->whereNull(['parent_id', 'deleted_at'])->count();
        $data['withdrawals'] = 0;
        $categories = Category::whereNull('deleted_at')->withCount('products')->whereHas('products', function ($q) {
            $q->where('seller_id', Auth::guard('web')->user()->id);
        });
        $data['categories'] = $categories->count();
        $data['achievement'] = Order::where('status', 'done')
            ->whereHas('order_items', function ($q) {
                $q->whereHas('product', function ($qq) {
                    $qq->where('seller_id', Auth::guard('web')->user()->id);
                });
            })->sum('total_final');
        $data['orders_done'] = Order::where('status', 'done')
            ->whereHas('order_items', function ($q) {
                $q->whereHas('product', function ($qq) {
                    $qq->where('seller_id', Auth::guard('web')->user()->id);
                });
            })->count();
        return view('clients.seller.dashboard', ['orders' => $order, 'data' => $data]);
    }
    public function profile()
    {
        return view('clients.seller.profile');
    }

    public function addWithdraw(Request $request)
    {
        if (!$this->isSeller()) {
            $user = Auth::guard('web')->user();
            return redirect('/pembeli')->with('auth', base64_encode($user->uid));
        }
        return view('clients.seller.withdraw.add');
    }
    public function allWithdraw(Request $request)
    {
        if (!$this->isSeller()) {
            $user = Auth::guard('web')->user();
            return redirect('/pembeli')->with('auth', base64_encode($user->uid));
        }
        return view('clients.seller.withdraw.all');
    }
    public function detailWithdraw(Request $request)
    {
        if (!$this->isSeller()) {
            $user = Auth::guard('web')->user();
            return redirect('/pembeli')->with('auth', base64_encode($user->uid));
        }
        return view('clients.seller.withdraw.detail');
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::guard('web')->user();

        if ($request->filled('seller_name')) {
            $user->seller_name = $request->seller_name;
            $user->seller_slug = Str::slug($request->seller_name);
            $checkDuplicate = User::where('id', '!=', $user->id)->where('seller_slug', $user->seller_slug)->first();
            if ($checkDuplicate) {
                return redirect("/toko/profil")->with('error', 'Nama Toko sudah digunakan')->with('auth', base64_encode($user->uid));
            }
        }

        if ($request->filled('seller_description')) {
            $user->seller_description = $request->seller_description;
        }
        if ($request->filled('is_seller')) {
            $user->is_seller = true;
        }
        if ($request->filled('phone_number_seller')) {
            $user->phone_number_seller = $request->phone_number_seller;
        }

        if ($request->hasFile('seller_image')) {
            $user->seller_image = uploadFoto($request->seller_image, 'uploads/seller/');
        }

        $user->save();
        if ($request->filled('is_seller')) {
            return redirect("/toko/profil")->with('success', 'berhasil membuat toko')->with('auth', base64_encode($user->uid));
        } else {
            return redirect("/toko/profil")->with('success', 'Profil toko berhasil diperbarui')->with('auth', base64_encode($user->uid));
        }
    }
}
