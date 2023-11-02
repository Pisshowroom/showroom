<?php

namespace App\Http\Controllers\Clients;

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
            ->with(['user:id,name', 'order_items:id,product_id,order_id', 'order_items.product:id,name'])
            ->when($request->filled('search'), function ($q) use ($request) {
                return $q->where('payment_identifier', 'like', "%$request->search%");
            })->orderBy('id', $request->orderBy ?? 'desc')->paginate($request->per_page ?? 10);
        foreach ($order as $key => $value) {
            $value->date = parseDates($value->created_at);
        }
        $data['orders_pending'] = Order::where('status', 'pending')
            ->where('user_id', Auth::guard('web')->user()->id)->count();
        $data['cart'] = 0;
        $data['wishlist'] = 0;
        $data['orders_done'] = Order::where('status', 'done')
            ->where('user_id', Auth::guard('web')->user()->id)->count();
        return view('clients.dashboard.dashboard', ['orders' => $order, 'data' => $data]);
    }
    public function myOrder(Request $request)
    {
        $order = Order::where('user_id', Auth::guard('web')->user()->id)
            ->with(['user:id,name', 'order_items:id,product_id,order_id', 'order_items.product:id,name'])
            ->when($request->filled('search'), function ($q) use ($request) {
                return $q->where('payment_identifier', 'like', "%$request->search%");
            })->orderBy('id', $request->orderBy ?? 'desc')->paginate($request->per_page ?? 10);
        foreach ($order as $key => $value) {
            $value->date = parseDates($value->created_at);
        }
        return view('clients.dashboard.order.all', ['orders' => $order]);
    }
    public function detailOrder(Request $request)
    {
        return view('clients.dashboard.order.detail');
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

        if ($request->filled('image')) {
            $user->image = $request->image;
        }

        if ($request->filled('birth_date')) {
            $user->birth_date = $request->birth_date;
        }

        $user->save();

        return redirect("/pembeli/pengaturan")->with('success', 'Profil berhasil diperbarui');
    }
}
