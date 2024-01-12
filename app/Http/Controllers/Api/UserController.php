<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AddressResource;
use App\Http\Resources\SellerResource;
use App\Http\Resources\UserResource;
use App\Models\Address;
use App\Models\Seller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function profile()
    {
        $user = Auth::guard('api-client')->user();
        // * Seller Not Using Other Model
        // $user->load('address_seller');

        // return ResponseAPI($user, 'Profile berhasil diambil');
        return new UserResource($user);
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::guard('api-client')->user();

        $request->validate([
            'phone_number' => 'required|unique:users,phone_number,'.$user->id,
            'email' => 'required|unique:users,email,'.$user->id,
        ]);
        
        if ($request->filled('name')) {
            $user->name = $request->input('name');
            // $user->seller_slug = Str::slug($request->input('name'));
        }

        if ($request->filled('email')) {
            $user->email = $request->input('email');
        }
        
        if ($request->filled('device_id')) {
            $user->device_id = $request->input('device_id');
        }

        if ($request->filled('phone_number')) {
            $user->phone_number = phoneGeneralize($request->input('phone_number'));
        }

        if ($request->hasFile('image')) {
            $user->image = uploadFoto($request->image, 'uploads/users/');
        } else if ($request->filled('image')) {
            $user->image = $request->image;
        }

        if ($request->filled('birth_date')) {
            $user->birth_date = $request->input('birth_date');
        }

        if ($request->filled('seller_description')) {
            $user->seller_description = $request->input('seller_description');
        }

        $user->save();

        return ResponseAPI('Profil berhasil diperbarui');
    }

    public function setDeviceId(Request $request)
    {
        $user = Auth::guard('api-client')->user();
        $request->validate([
            'device_id' => 'required|string',
        ]);

        $user->device_id = $request->device_id;
        $user->save();

        return ResponseAPI('Berhasil mengubah device id');
    }

    public function updateSeller(Request $request)
    {
        $seller = Auth::guard('api-client')->user();
        if ($seller->is_seller == false) {
            return ResponseAPI('Anda belum terdaftar sebagai seller', 400);
        }

        // request validate unique on name and phone_number_seller, exept on edit mode checking
        $request->validate([
            'name' =>  ['required', 'string', Rule::unique('users')->ignore($seller->id)],
            'phone_number_seller' =>  ['required', Rule::unique('users')->ignore($seller->id)],
            'seller_description' => 'nullable|string',
        ]);
        // if ($seller == null) {
        //     $seller = new Seller();
        // }

        $request->validate([
            'name' => 'required|string|max:255',
            'seller_description' => 'nullable|string',
        ]);

        if ($request->filled('name')) {
            $seller->seller_name = $request->input('name');
            $seller->seller_slug = Str::slug($request->name);
        }

        if ($request->filled('seller_description')) {
            $seller->seller_description = $request->input('seller_description');
        }
        
        if ($request->filled('phone_number_seller')) {
            $seller->phone_number_seller = phoneGeneralize($request->phone_number_seller);
        }

        if ($request->hasFile('image')) {
            $seller->seller_image = uploadFoto($request->image, 'uploads/sellers/');
        } else if ($request->filled('image')) {
            $seller->seller_image = $request->image;
        }


        $seller->is_seller = true;
        $seller->save();

        return response()->json(['message' => 'Berhasil memperbarui data.']);
    }

    public function myUserSeller()
    {
        $user = Auth::guard('api-client')->user();
        if($user->is_seller == false){
            return ResponseAPI('Anda belum terdaftar sebagai seller', 400);
        }

        return new SellerResource($user);
    }

    public function setDeliveryService(Request $request)
    {
        $user = Auth::guard('api-client')->user();
        $request->validate([
            'seller_delivery_service' => 'required|string',
        ]);

        $user->seller_delivery_service = $request->seller_delivery_service;
        $user->save();

        return ResponseAPI('Berhasil mengubah status layanan pengiriman');
    }

    public function registerAsSeller(Request $request)
    {
        $user = Auth::guard('api-client')->user();
        /* if ($user->is_seller == true) {
            return ResponseAPI('Anda sudah terdaftar sebagai seller', 400);
        } */

        $request->validate([
            'name' => 'required|string|unique:users,name',
            'phone_number_seller' => 'required|unique:users,phone_number',
            'seller_description' => 'nullable|string',
        ]);

        DB::beginTransaction();
        $addressSellerController = new AddressSellerController();
        $request->merge([
            'for_seller' => true,
        ]);

        $addressSellerController->storeOrUpdate($request);

        $user->seller_name = $request->input('name');
        $user->seller_slug = Str::slug($request->name);
        $user->phone_number_seller = phoneGeneralize($request->phone_number_seller);
        $user->seller_delivery_service = "jne:jnt:sicepat:anteraja";
        $user->is_seller = true;
        $user->save();

        DB::commit();
        return ResponseAPI('Berhasil mendaftar sebagai seller', 200);
    }

    public function getASeller($sellerId)
    {
        $seller = User::where('id', $sellerId)->where('is_seller', true)->first();
        $seller->load('address_seller');
        if (!$seller) {
            return ResponseAPI("Seller tidak ditemukan", 404);
        }

        return new SellerResource($seller);
    }

    public function logout()
    {
        $user = Auth::guard('api-client')->user();
        $user->tokens()->delete();

        return ResponseAPI('Logout berhasil');
    }

    // func setSellerActiveStatus
    public function setSellerActiveStatus(Request $request)
    {
        $request->validate([
            'is_seller_active' => 'required|boolean',
        ]);
        $user = Auth::guard('api-client')->user();
        if ($user->is_seller == false) {
            return ResponseAPI('Anda belum terdaftar sebagai seller', 400);
        }
        
        $user->is_seller_active = (bool)$request->is_seller_active;
        $user->save();

        return ResponseAPI('Berhasil mengubah status seller', 200);
    }

    public function deleteAccount()
    {
        $user = Auth::guard('api-client')->user();
        $user->phone_number = null;
        $user->email = uniqid() . $user->email;
        if ($user->is_seller) {
            $user->is_seller_active = false;
        }
        $user->save();
        
        $user->delete();
        return ResponseAPI('Akun berhasil dihapus');
    }
}
