<?php

namespace App\Http\Controllers\Clients\buyer;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\Order;
use App\Models\RoCity;
use App\Models\RoProvince;
use App\Models\RoSubdistrict;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\NotificationResource;
use App\Models\Notification;
use App\Models\User;

class DashboardController extends Controller
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

    public function dashboard(Request $request)
    {
        $order = Order::where('user_id', Auth::guard('web')->user()->id)
            ->with(['order_items:id,product_id,order_id', 'order_items.product:id,name'])
            ->whereHas('order_items', function ($q) use ($request) {
                $q->whereHas('product', function ($qq) use ($request) {
                    if ($request->filled('search'))
                        $qq->where('name', 'like', "%$request->search%");
                    if ($request->filled('category_id'))
                        $qq->where('category_id', $request->category_id);
                });
            })->select('id', 'payment_identifier', 'user_id', 'created_at', 'status', 'total')
            ->orderBy('id', $request->orderBy ?? 'desc')->paginate($request->per_page ?? 10);
        foreach ($order as $key => $value) {
            $value->date = parseDates($value->created_at);
        }
        $data = $this->getCommonData();

        $data['all_order'] = Order::whereNull('deleted_at')
            ->where('user_id', Auth::guard('web')->user()->id)->count();
        $data['cart'] = 0;
        $data['wishlist'] = 0;
        $data['orders_done'] = Order::where('status', 'Completed')
            ->where('user_id', Auth::guard('web')->user()->id)->count();
        // dd($order);
        return view('clients.dashboard.dashboard', ['orders' => $order, 'data' => $data]);
    }

    public function citiesByProvince($id)
    {
        $cities = RoCity::where('ro_province_id', $id)->select('id', 'city_name', 'postal_code', 'ro_province_id')->get();

        return ResponseAPI($cities);
    }
    public function subCategory($id)
    {
        $sc = SubCategory::where('category_id', $id)->select('id', 'name', 'category_id')->get();

        return ResponseAPI($sc);
    }

    public function subdistrictsByCity($id)
    {
        $subdistricts = RoSubdistrict::where('ro_city_id', $id)->select('id', 'ro_city_id', 'subdistrict_name')->get();

        return ResponseAPI($subdistricts);
    }

    public function settings()
    {

        // $user = Address::where('user_id', Auth::guard('user')->user()->id)->first();
        // $user['provinces'] = RoProvince::select('id', 'name')->get();
        // if ($user->province_id != null) {
        //     $user['cities'] = RoCity::where('province_id', $user->province_id)->get();
        // } else {
        //     $user['cities'] = '';
        // }
        // if ($user->province_id != null && $user->city_id) {
        //     $user['districts'] = RoSubdistrict::where('city_id', $user->city_id)->get();
        // } else {
        //     $user['districts'] = '';
        // }
        $user = $this->getCommonData();

        $user['addresses'] = Address::where('user_id', Auth::guard('web')->user()->id)->whereNull('deleted_at')
            ->select([
                'id', 'user_id', 'place_name', 'person_name', 'phone_number', 'main', 'for_seller',
                'ro_province_id', 'district', 'city', 'address_description'
            ])
            ->with('ro_province:id,province_name')->orderByDesc('main')
            ->get();
        $user['provinces'] = RoProvince::select('id', 'province_name')->get();
        return view('clients.dashboard.settings', ['data' => $user]);
    }

    public function changeAddress($id)
    {
        $user = $this->getCommonData();

        $user = Address::where('id', $id)->firstOrFail();
        if ($user->ro_province_id != null) {
            $user['cities'] = RoCity::where('ro_province_id', $user->ro_province_id)->select('id', 'city_name', 'postal_code', 'ro_province_id')->get();
        } else {
            $user['cities'] = '';
        }
        if ($user->ro_province_id != null && $user->ro_city_id != null) {
            $user['districts'] = RoSubDistrict::where('ro_city_id', $user->ro_city_id)->select('id', 'ro_city_id', 'subdistrict_name')->get();
        } else {
            $user['districts'] = '';
        }
        $user['provinces'] = RoProvince::select('id', 'province_name')->get();
        return view('clients.dashboard.edit_address', ['data' => $user]);
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::guard('web')->user();

        if ($request->filled('name')) {
            $user->name = $request->name;
        }

        if ($request->filled('email')) {
            $user->email = $request->email;
            $checkDuplicate = User::where('id', '!=', $user->id)->where('email', $user->email)->first();
            $checkDuplicate2 = User::where('id', '!=', $user->id)->withTrashed()->where('email', $user->email)->first();
            if ($checkDuplicate || $checkDuplicate2) {
                return redirect("/toko/profil")->with('error', 'Email sudah digunakan')->with('auth', base64_encode($user->uid));
            }
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
        if ($request->filled('password')) {
            $user->password = bcrypt($request->password);
        }

        $user->save();
        return response()->json([
            "status" => "success",
            "message" => "Profil berhasil diperbarui",
        ]);
    }

    public function updateAddress(Request $request)
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
        if (isset($request->main))
            $main =  filter_var($request->main, FILTER_VALIDATE_BOOLEAN);
        else
            $main = null;
        if ($user->address()->count() < 1) {
            $address->main = true;
        } elseif ($main == true) {
            if ($request->id)
                $user->address()->where('main', true)->where('id', '!=', $address->id)->where('for_seller', false)->update(['main' => false]);
            $address->main = true;
        } elseif ($main == false) {
            $address->main = false;
        }
        $address->user_id = $user->id;
        $address->save();
        return response()->json([
            "status" => "success",
            "message" => "Alamat berhasil diperbarui",
            "redirect" => route('dashboard.settings') . '?param=alamat&auth=' . base64_encode($user->uid)
        ], 200, [], JSON_UNESCAPED_SLASHES);
    }
    public function deleteAddress($id)
    {
        $user = Auth::guard('web')->user();
        $ad = Address::where('id', $id)->firstOrFail();
        $ad->delete();
        return redirect("/pembeli/pengaturan?param=alamat")->with('success', 'Alamat berhasil dihapus')->with('auth', base64_encode($user->uid));
    }
    public function cancelOrder(Request $request)
    {
        $user = Auth::guard('web')->user();
        $identifier = $request->identifier;
        $page = $request->page;
        $order = Order::where('payment_identifier', $identifier)->firstOrFail();

        $order->status = Order::CANCELLED;
        $order->save();

        if ($page == 'dashboardSeller.dashboard' or $page == 'dashboardSeller.allTransaction')
            return redirect()->route($page)->with('success', 'Berhasil membatalkan transaksi')->with('auth', base64_encode($user->uid));
        else {
            $order->load(['seller']);
            $seller = $order->seller;
            if ($seller) {
                $notificationTitle = "Pesanan Dibatalkan";
                $notificationSubTitle = "Pembeli telah membatalkan pesanannya";
                $notifLink = "/detail_penjualan-" . $order->id;
                $notifLinkLabel = "Lihat Pesanan";
                $notifLinkWeb = "/toko/detail-transaksi/" . $order->payment_identifier;
                $dataNotif = [
                    'type' => "new-notification",
                    'notifLink' => $notifLink,
                    'notifLinkLabel' => $notifLinkLabel,
                    'notifLinkWeb' => $notifLinkWeb
                ];
                createNotificationData($seller->id, $notificationTitle, $notificationSubTitle, null, $notifLink, $notifLinkLabel, $notifLinkWeb);
                if ($seller->device_id != null)
                    sendMessage($notificationTitle, $notificationSubTitle, $dataNotif, $seller->device_id);
            }

            return redirect()->route($page)->with('success', 'Berhasil membatalkan pesanan')->with('auth', base64_encode($user->uid));
        }
    }
    public function deleteOrder(Request $request)
    {
        $user = Auth::guard('web')->user();
        $identifier = $request->identifier;
        $page = $request->page;
        Order::where('payment_identifier', $identifier)->delete();
        if ($page == 'dashboardSeller.dashboard' or $page == 'dashboardSeller.allTransaction')
            return redirect()->route($page)->with('success', 'Berhasil menghapus transaksi')->with('auth', base64_encode($user->uid));
        else
            return redirect()->route($page)->with('success', 'Berhasil menghapus pesanan')->with('auth', base64_encode($user->uid));
    }


    public function deleteAccount($id)
    {
        $user = Auth::guard('web')->user();
        if (!$user)
            return redirect()->route('buyer.home')->with('error', 'Akun tidak ditemukan');
        $user->phone_number = null;
        $user->email = uniqid() . $user->email;
        $user->save();

        $user->delete();
        return redirect()->route('buyer.home')->with('success', 'Akun berhasil dihapus')->with('auth', base64_encode($user->uid));
    }
}
