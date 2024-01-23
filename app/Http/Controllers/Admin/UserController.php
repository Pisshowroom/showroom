<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $users = User::when($request->filled('search'), function ($query) use ($request) {
                $query->where(function ($query2) use ($request) {
                    $query2->where('name', 'like', "%$request->search%")->orWhere('email', 'like', "%$request->search%");
                    // ->orWhere('phone', 'like', "%$request->search%");
                });
            })->paginate($request->per_page ?? 15);

        return $users;
    }

    public function detail(User $user)
    {
        $user->load(['addresses.ro_city']);

        return $user;
    }

    public function update(User $user, Request $request)
    {
        // return ResponseAPI($request->all(), 400);
        $request->validate([
            'name' => 'required|string',
            'password' => 'nullable|string',
            'is_seller' => 'nullable|in:false,true',
            'is_seller_active' => 'nullable|in:false,true',
            'seller_name' => 'nullable|string',
            'seller_fee_amount' => 'nullable|numeric',
            'seller_fee_percentage' => 'nullable|numeric',
        ]);

        /* if ($request->filled('password')) {
            $request->validate([
                'password' => 'required|string|min:8',
                'confirmation_password' => 'required|string|min:8',
            ]);

            if ($request->password != $request->confirmation_password) {
                return response()->json([
                    'message' => 'Password dan Konfirmasi Password tidak sama',
                ], 422);
            }
            $user->password = bcrypt($request->password);
        } */

        $user->name = $request->name;

        if ($request->filled('password')) {
            $user->password = bcrypt($request->password);
        }

        $isSeller = $request->is_seller == 'false' ? false : true;
        $isSellerActive = $request->is_seller_active  == 'false' ? false : true;
        // return ResponseAPI([$a, $b], 400);
        

        $user->phone_number = phoneGeneralize($request->phone_number);
        $user->is_seller = $isSeller;
        $user->is_seller_active = $isSellerActive;
        $user->seller_id = $request->seller_id;
        if ($request->filled('seller_name')) {
            $user->seller_name = $request->input('name');
            $user->seller_slug = Str::slug($request->name);
        }

        $user->seller_fee_amount = $request->seller_fee_amount;
        $user->seller_fee_percentage = $request->seller_fee_percentage;
        $user->save();

        return ResponseAPI("Berhasil memperbarui", 200);
    }

    public function destroy(User $user)
    {
        if ($user->is_seller) {
            $user->is_seller_active = false;
            $user->save();
        }

        $user->delete();

        return ResponseAPI('Pengguna berhasil dihapus', 200);
    }
}
