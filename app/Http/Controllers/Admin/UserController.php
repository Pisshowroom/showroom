<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $users = User::when($request->filled('search'), function ($query) use ($request) {
                $query->where('name', 'like', "%$request->search%")->where(function ($query2) use ($request) {
                    $query2->orWhere('email', 'like', "%$request->search%");
                    // ->orWhere('phone', 'like', "%$request->search%");
                });
            })->paginate($request->per_page ?? 15);

        return $users;
    }

    public function detail(User $user)
    {
        $user->load(['address.ro_city', 'orders']);

        return $user;
    }

    public function update(User $user, Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone_number' => 'required|numeric',
            'password' => 'nullable|string',
            'birth_date' => 'nullable|date',
            'balance' => 'nullable|numeric',
            'is_seller' => 'nullable|boolean',
            'is_seller_active' => 'nullable|boolean',
            'seller_id' => 'nullable|numeric',
            'seller_slug' => 'nullable|string',
            'seller_name' => 'nullable|string',
            'phone_number_seller' => 'nullable|numeric',
            'seller_fee_amount' => 'nullable|numeric',
            'seller_fee_percentage' => 'nullable|numeric',
            'seller_image' => 'nullable|string',
            'seller_delivery_service' => 'nullable|string',
            'seller_description' => 'nullable|string',
        ]);

        if ($request->filled('password')) {
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
        }

        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone_number = $request->phone_number;
        $user->is_seller = $request->is_seller;
        $user->is_seller_active = $request->is_seller_active;
        $user->seller_id = $request->seller_id;
        $user->seller_slug = $request->seller_slug;
        $user->seller_name = $request->seller_name;
        $user->phone_number_seller = $request->phone_number_seller;
        $user->seller_fee_amount = $request->seller_fee_amount;
        $user->seller_fee_percentage = $request->seller_fee_percentage;
        $user->seller_image = $request->seller_image;
        $user->seller_delivery_service = $request->seller_delivery_service;
        $user->seller_description = $request->seller_description;
        $user->save();
    }
}
