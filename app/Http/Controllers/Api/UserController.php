<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function profile()
    {
        $user = Auth::guard('api-client')->user();

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

        if ($request->filled('image')) {
            $user->image = $request->input('image');
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

    public function logout()
    {
        $user = Auth::guard('api-client')->user();
        $user->tokens()->delete();

        return ResponseAPI('Logout berhasil');
    }
}
