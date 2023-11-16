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
            return redirect('/pembeli');
        }
        $order = Order::whereHas('order_items', function ($q) use ($request) {
            $q->whereHas('product', function ($qq) use ($request) {
                if ($request->filled('search'))
                    $qq->where('name', 'like', "%$request->search%");
                if ($request->filled('category_id'))
                    $qq->where('category_id', $request->category_id);

                $qq->where('seller_id', Auth::guard('web')->user()->id);
            });
        })
            ->with(['user:id,name', 'order_items:id,product_id,order_id', 'order_items.product:id,name'])
            ->orderBy('id', $request->orderBy ?? 'desc')->paginate($request->per_page ?? 10);
        foreach ($order as $key => $value) {
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
    public function allTransaction(Request $request)
    {
        if (!$this->isSeller()) {
            return redirect('/pembeli');
        }
        $status = $request->input('status');

        $order = Order::where('user_id', Auth::guard('web')->user()->id)
            ->with(['order_items:id,product_id,order_id', 'order_items:id,product_id,order_id,user_id', 'order_items.product:id,name'])
            ->whereHas('order_items', function ($q) use ($request) {
                $q->whereHas('product', function ($qq) use ($request) {
                    if ($request->filled('search'))
                        $qq->where('payment_identifier', 'like', "%$request->search%");
                    $qq->where('seller_id', Auth::guard('web')->user()->id);
                });
            })->select('id', 'payment_identifier', 'user_id', 'created_at', 'status', 'total')
            ->when($status, function ($query, $status) {
                if ($status != 'all')
                    return $query->where('status', $status);
            })->orderBy('id', $request->orderBy ?? 'desc')->paginate($request->per_page ?? 10);
        foreach ($order as $key => $value) {
            if (now() > $value->payment_due)
                $value->expired = true;
            else
                $value->expired = false;
            $value->date = parseDates($value->created_at);
        }
        return view('clients.seller.transaction.all', ['orders' => $order]);
    }
    public function detailTransaction($identifier)
    {
        if (!$this->isSeller()) {
            return redirect('/pembeli');
        }
        $order = Order::where('payment_identifier', $identifier)
            ->with([
                'address:id,person_name,district,city,phone_number,lat,long',
                'user:id,name,email',
                'order_items', 'order_items.product:id,name,seller_id,images,slug',
                'order_items.product.seller:id,seller_name,seller_slug,email',
                'master_account:id,name,image,type'
            ])->firstOrFail();
        $order->date = parseDates($order->created_at);
        $order->date_paid_at = $order->paid_at ? parseDates($order->paid_at) : '-';
        $order->date_packing_due = $order->packing_due ? parseDates($order->packing_due) : '-';
        $order->date_delivered_at = $order->delivered_at ? parseDates($order->delivered_at) : '-';
        $order->date_arrived_at = $order->arrived_at ? parseDates($order->arrived_at) : '-';
        return view('clients.seller.transaction.detail', ['order' => $order]);
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

        if ($request->filled('seller_name')) {
            $user->seller_name = $request->seller_name;
            $user->seller_slug = Str::slug($request->seller_name);
            $checkDuplicate = User::where('id', '!=', $user->id)->where('seller_slug', $user->seller_slug)->first();
            if ($checkDuplicate) {
                return redirect("/toko/profil")->with('error', 'Nama Toko sudah digunakan');
            }
        }

        if ($request->filled('seller_description')) {
            $user->seller_description = $request->seller_description;
        }
        if ($request->filled('is_seller')) {
            $user->is_seller = true;
        }

        if ($request->hasFile('seller_image')) {
            $user->seller_image = uploadFoto($request->seller_image, 'uploads/seller/');
        }

        $user->save();
        if ($request->filled('is_seller')) {
            return redirect("/toko/profil")->with('success', 'berhasil membuat toko');
        } else {
            return redirect("/toko/profil")->with('success', 'Profil toko berhasil diperbarui');
        }
    }
}
