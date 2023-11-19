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
        $user->load('seller');

        // return ResponseAPI($user, 'Profile berhasil diambil');
        return new UserResource($user);
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::guard('api-client')->user();

        if ($request->filled('name')) {
            $user->name = $request->input('name');
            // str::slug of name
            $user->seller_slug = Str::slug($request->input('name'));
        }

        if ($request->filled('email')) {
            $user->email = $request->input('email');
        }

        if ($request->filled('device_id')) {
            $user->device_id = $request->input('device_id');
        }

        if ($request->filled('phone_number')) {
            $user->phone_number = $request->input('phone_number');
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

        if ($request->hasFile('image')) {
            $seller->seller_name = uploadFoto($request->image, 'uploads/sellers/');
        } else if ($request->filled('image')) {
            $seller->seller_name = $request->image;
        }


        $seller->is_seller = true;
        $seller->save();

        return response()->json(['message' => 'Berhasil memperbarui data.']);
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

        $address = $addressSellerController->storeOrUpdate($request);

        $user->seller_name = $request->input('name');
        $user->seller_slug = Str::slug($request->name);
        $user->phone_number_seller = $request->phone_number_seller;
        $user->is_seller = true;
        $user->save();

        DB::commit();
        return ResponseAPI('Berhasil mendaftar sebagai seller', 200);
    }

    public function getASeller($sellerId)
    {
        $seller = User::where('id', $sellerId)->where('is_seller', true)->first();
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
}
