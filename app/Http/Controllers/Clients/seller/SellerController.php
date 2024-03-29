<?php

namespace App\Http\Controllers\Clients\seller;

use App\Http\Controllers\Controller;
use App\Http\Resources\NotificationResource;
use App\Models\Address;
use App\Models\Category;
use App\Models\Notification;
use App\Models\Order;
use App\Models\Product;
use App\Models\RoCity;
use App\Models\RoProvince;
use App\Models\RoSubdistrict;
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
            ->select('id', 'payment_identifier', 'user_id', 'created_at', 'status', 'payment_status', 'total', 'total_final', 'seller_id', 'payment_due')
            ->with(['user:id,name', 'order_items:id,product_id,order_id', 'order_items.product:id,name'])
            ->orderBy('id', $request->orderBy ?? 'desc')->paginate($request->per_page ?? 10);
        foreach ($order as $key => $value) {
            if (now() > $value->payment_due)
                $value->expired = true;
            else
                $value->expired = false;
            $value->date = parseDates($value->created_at);
        }
        $data = $this->getCommonData();
        $data['products'] = Product::where('seller_id', Auth::guard('web')->user()->id)->whereNull(['parent_id', 'deleted_at'])->count();
        $data['withdrawals'] = 0;
        $categories = Category::whereNull('deleted_at')->withCount('products')->whereHas('products', function ($q) {
            $q->where('seller_id', Auth::guard('web')->user()->id);
        });
        $data['categories'] = $categories->count();
        $data['achievement'] = Order::where('status', 'Completed')
            ->whereHas('order_items', function ($q) {
                $q->whereHas('product', function ($qq) {
                    $qq->where('seller_id', Auth::guard('web')->user()->id);
                });
            })->sum('total_final');
        $data['orders_done'] = Order::where('status', 'Completed')
            ->whereHas('order_items', function ($q) {
                $q->whereHas('product', function ($qq) {
                    $qq->where('seller_id', Auth::guard('web')->user()->id);
                });
            })->count();
        return view('clients.seller.dashboard', ['orders' => $order, 'data' => $data]);
    }
    public function profile()
    {
        $user = $this->getCommonData();

        $user['addresses'] = Address::where('user_id', Auth::guard('web')->user()->id)->whereNull('deleted_at')
            ->select([
                'id', 'user_id', 'place_name', 'person_name', 'phone_number', 'main', 'for_seller',
                'ro_province_id', 'district', 'city', 'address_description'
            ])
            ->with('ro_province:id,province_name')->orderByDesc('for_seller')
            ->get();
        $user['provinces'] = RoProvince::select('id', 'province_name')->get();

        return view('clients.seller.profile', ['data' => $user]);
    }
    public function addressSeller($id)
    {
        $user = $this->getCommonData();

        $user = Address::where('id', $id)->firstOrFail();
        if ($user->ro_province_id != null) {
            $user['cities'] = RoCity::where('ro_province_id', $user->ro_province_id)->select('id', 'city_name', 'postal_code', 'ro_province_id')->get();
        } else {
            $user['cities'] = '';
        }
        if ($user->ro_province_id != null && $user->ro_city_id != null) {
            $user['districts'] = RoSubdistrict::where('ro_city_id', $user->ro_city_id)->select('id', 'ro_city_id', 'subdistrict_name')->get();
        } else {
            $user['districts'] = '';
        }
        $user['provinces'] = RoProvince::select('id', 'province_name')->get();
        return view('clients.seller.address_seller', ['data' => $user]);
    }
    public function updateAddressSeller(Request $request)
    {
        $user = Auth::guard('web')->user();

        $request->validate([
            'ro_province_id' => 'required',
            'ro_city_id' => 'required',
            'ro_subdistrict_id' => 'required',
            // 'street' => 'nullable',
            // 'place_name' => 'nullable',
            // 'person_name' => 'nullable',
            // 'phone_number' => 'required',
            // 'village' => 'nullable',
            // 'district' => 'nullable',
            // 'city' => 'nullable',
            // 'address_text' => 'nullable',
            // 'address_description' => 'nullable',
            'lat' => 'required',
            'long' => 'required',
        ]);
        if ($request->id)
            $address = Address::findOrFail($request->id);
        else
            $address = new Address();
        $address->ro_province_id = $request->ro_province_id;
        $address->ro_city_id = $request->ro_city_id;
        $address->ro_subdistrict_id = $request->ro_subdistrict_id;
        if ($request->ro_city_id) {
            $city = RoCity::where('id', $request->ro_city_id)->first();
            $address->city = $city->city_name;
        }
        if ($request->ro_subdistrict_id) {
            $sb = RoSubdistrict::where('id', $request->ro_subdistrict_id)->first();
            $address->district = $sb->subdistrict_name;
        }
        if ($request->filled('place_name'))
            $address->place_name = $request->place_name;
        if ($request->filled('person_name'))
            $address->person_name = $request->person_name;
        if ($request->filled('phone_number'))
            $address->phone_number = $request->phone_number;
        if ($request->filled('address_description'))
            $address->address_description = $request->address_description;
        $address->lat = $request->lat;
        $address->long = $request->long;
        if (isset($request->for_seller))
            $for_seller =  filter_var($request->for_seller, FILTER_VALIDATE_BOOLEAN);
        else
            $for_seller = null;
        if ($user->address_seller()->count() < 1) {
            $address->for_seller = true;
        } elseif ($for_seller == true) {
            if ($request->id)
                $user->address_seller()->where('id', '!=', $address->id)->where('for_seller', true)->update(['for_seller' => false]);
            $address->for_seller = true;
        } elseif ($for_seller == false) {
            $address->for_seller = false;
        }

        $address->user_id = $user->id;
        $address->save();
        return response()->json([
            "status" => "success",
            "message" => "Alamat berhasil diperbarui",
            "redirect" => route('dashboardSeller.profile') . '?param=alamat&auth=' . base64_encode($user->uid)
        ], 200, [], JSON_UNESCAPED_SLASHES);
    }
    public function deleteAddressSeller($id)
    {
        $user = Auth::guard('web')->user();
        $ad = Address::where('id', $id)->firstOrFail();
        $ad->delete();
        return redirect("/toko/profil?param=alamat")->with('success', 'Alamat berhasil dihapus')->with('auth', base64_encode($user->uid));
    }
    public function addWithdraw(Request $request)
    {
        if (!$this->isSeller()) {
            $user = Auth::guard('web')->user();
            return redirect('/pembeli')->with('auth', base64_encode($user->uid));
        }
        $data = $this->getCommonData();
        return view('clients.seller.withdraw.add', ['data' => $data]);
    }
    public function allWithdraw(Request $request)
    {
        if (!$this->isSeller()) {
            $user = Auth::guard('web')->user();
            return redirect('/pembeli')->with('auth', base64_encode($user->uid));
        }
        $data = $this->getCommonData();
        return view('clients.seller.withdraw.all', ['data' => $data]);
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
            $checkDuplicate2 = User::where('id', '!=', $user->id)->withTrashed()->where('seller_slug', $user->seller_slug)->first();
            if ($checkDuplicate || $checkDuplicate2) {
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
            $checkDuplicate = User::where('id', '!=', $user->id)->where('phone_number_seller', $user->phone_number_seller)->first();
            $checkDuplicate2 = User::where('id', '!=', $user->id)->withTrashed()->where('phone_number_seller', $user->phone_number_seller)->first();
            if ($checkDuplicate || $checkDuplicate2) {
                return redirect("/toko/profil")->with('error', 'Nomor Handphone Toko sudah digunakan')->with('auth', base64_encode($user->uid));
            }
        }
        $user->seller_delivery_service = "jne:jnt:sicepat:anteraja";

        if ($request->hasFile('seller_image')) {
            $user->seller_image = uploadFoto($request->seller_image, 'uploads/sellers/');
        }
        if (isset($request->is_seller_active))
            $is_seller_active =  filter_var($request->is_seller_active, FILTER_VALIDATE_BOOLEAN);
        else
            $is_seller_active = null;

        if ($is_seller_active == true)
            $user->is_seller_active = true;
        else if ($is_seller_active == false)
            $user->is_seller_active = false;

        $user->save();
        return response()->json([
            "status" => "success",
            "message" => $request->filled('is_seller') ? "Berhasil membuat toko" : "Profil toko berhasil diperbarui",
        ]);
    }
}
