<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
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
            return redirect('/pembeli');
        }
        $order = Order::whereHas('order_items', function ($q) {
            $q->whereHas('product', function ($qq) {
                $qq->where('seller_id', Auth::guard('web')->user()->id);
            });
        })
            ->with(['user:id,name', 'order_items:id,product_id,order_id', 'order_items.product:id,name'])
            ->when($request->filled('search'), function ($q) use ($request) {
                return $q->where('payment_identifier', 'like', "%$request->search%");
            })->orderBy('id', $request->orderBy ?? 'desc')->paginate($request->per_page ?? 10);
        foreach ($order as $key => $value) {
            $value->date = parseDates($value->created_at);
        }
        $data['products'] = Product::where('seller_id', Auth::guard('web')->user()->id)->whereNull('deleted_at')->count();
        $data['withdrawals'] = 0;
        $data['categories'] = Category::whereNull('deleted_at')->withCount('products')->whereHas('products', function ($q) {
            $q->where('seller_id', Auth::guard('web')->user()->id);
        })->count();
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
    public function profile(Request $request)
    {
        if (!$this->isSeller()) {
            return redirect('/pembeli');
        }
        return view('clients.seller.profile');
    }
    public function allTransaction(Request $request)
    {
        if (!$this->isSeller()) {
            return redirect('/pembeli');
        }
        return view('clients.seller.transaction.all');
    }
    public function detailTransaction(Request $request)
    {
        if (!$this->isSeller()) {
            return redirect('/pembeli');
        }
        return view('clients.seller.transaction.detail');
    }
    public function addWithdraw(Request $request)
    {
        if (!$this->isSeller()) {
            return redirect('/pembeli');
        }
        return view('clients.seller.withdraw.add');
    }
    public function allWithdraw(Request $request)
    {
        if (!$this->isSeller()) {
            return redirect('/pembeli');
        }
        return view('clients.seller.withdraw.all');
    }
    public function detailWithdraw(Request $request)
    {
        if (!$this->isSeller()) {
            return redirect('/pembeli');
        }
        return view('clients.seller.withdraw.detail');
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::guard('web')->user();

        if ($request->filled('name')) {
            $user->name = $request->name;
            $user->seller_slug = Str::slug($request->name);
        }

        if ($request->filled('seller_description')) {
            $user->seller_description = $request->seller_description;
        }

        if ($request->filled('image')) {
            $user->image = $request->image;
        }

        $user->save();

        return redirect("/toko/profil")->with('success', 'Profil toko berhasil diperbarui');
    }
}
