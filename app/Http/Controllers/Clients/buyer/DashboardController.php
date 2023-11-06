<?php

namespace App\Http\Controllers\Clients\buyer;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class DashboardController extends Controller
{
    public function dashboard(Request $request)
    {
        $order = Order::where('user_id', Auth::guard('web')->user()->id)
            ->with(['order_items:id,product_id,order_id', 'order_items:id,product_id,order_id,user_id', 'order_items.product:id,name'])
            ->whereHas('order_items', function ($q) use ($request) {
                $q->whereHas('product', function ($qq) use ($request) {
                    if ($request->filled('search'))
                        $qq->where('name', 'like', "%$request->search%");
                });
            })->select('id', 'payment_identifier', 'user_id', 'created_at', 'status', 'total')
            ->orderBy('id', $request->orderBy ?? 'desc')->paginate($request->per_page ?? 10);
        foreach ($order as $key => $value) {
            $value->date = parseDates($value->created_at);
        }
        $data['all_order'] = Order::whereNull('deleted_at')
            ->where('user_id', Auth::guard('web')->user()->id)->count();
        $data['cart'] = 0;
        $data['wishlist'] = 0;
        $data['orders_done'] = Order::where('status', 'done')
            ->where('user_id', Auth::guard('web')->user()->id)->count();
        // dd($order);
        return view('clients.dashboard.dashboard', ['orders' => $order, 'data' => $data]);
    }
    public function myOrder(Request $request)
    {
        $order = Order::where('user_id', Auth::guard('web')->user()->id)
            ->with(['order_items:id,product_id,order_id', 'order_items:id,product_id,order_id,user_id', 'order_items.product:id,name'])
            ->whereHas('order_items', function ($q) use ($request) {
                $q->whereHas('product', function ($qq) use ($request) {
                    if ($request->filled('search'))
                        $qq->where('name', 'like', "%$request->search%");
                });
            })->select('id', 'payment_identifier', 'user_id', 'created_at', 'status', 'total')
            ->orderBy('id', $request->orderBy ?? 'desc')->paginate($request->per_page ?? 10);
        foreach ($order as $key => $value) {
            $value->date = parseDates($value->created_at);
        }
        return view('clients.dashboard.order.all', ['orders' => $order]);
    }
    public function detailOrder($identifier)
    {
        $order = Order::where('payment_identifier', $identifier)->with(['order_items', 'order_items.product:id,name,seller_id,images,slug', 'order_items.product.seller:id,name,seller_slug'])->first();
        $order->date = parseDates($order->created_at);
        return view('clients.dashboard.order.detail', ['order' => $order]);
    }
    public function settings()
    {
        return view('clients.dashboard.settings');
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::guard('web')->user();

        if ($request->filled('name')) {
            $user->name = $request->name;
            $user->seller_slug = Str::slug($request->name);
        }

        if ($request->filled('email')) {
            $user->email = $request->email;
        }

        if ($request->filled('device_id')) {
            $user->device_id = $request->device_id;
        }

        if ($request->hasFile('image')) {
            $user->image = uploadFoto($request->image, 'uploads/user/');
        }

        if ($request->filled('birth_date')) {
            $user->birth_date = $request->birth_date;
        }

        $user->save();

        return redirect("/pembeli/pengaturan")->with('success', 'Profil berhasil diperbarui');
    }

    public function cancelOrder(Request $request)
    {
        $identifier = $request->identifier;
        $page = $request->page;
        Order::where('payment_identifier', $identifier)->update(['status' => 'cancel']);
        if ($page == 'dashboardSeller.dashboard' or $page == 'dashboardSeller.allTransaction')
            return redirect()->route($page)->with('success', 'Berhasil membatalkan transaksi');
        else
            return redirect()->route($page)->with('success', 'Berhasil membatalkan pesanan');
    }
}
