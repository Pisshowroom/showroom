<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\SellerResource;
use App\Http\Resources\UserResource;
use App\Models\Seller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

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

        if ($seller == null) {
            $seller = new Seller();
        }

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

    // return single data of seller using SellerResource, get from param $sellerId 
    public function getSeller($sellerId)
    {
        $seller = User::where('id', $sellerId)->first();
        return new SellerResource($seller);
    }

    public function logout()
    {
        $user = Auth::guard('api-client')->user();
        $user->tokens()->delete();

        return ResponseAPI('Logout berhasil');
    }
}
