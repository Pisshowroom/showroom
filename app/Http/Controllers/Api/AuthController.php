<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\FirebaseToken;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginFirebase(Request $request)
    {
        $request->validate([
            'id_token' => 'required'
        ]);

        $firebase = new FirebaseToken($request->id_token);
        $payload = $firebase->verify("pis-ecommerce");

        $user = User::where('uid', $payload->user_id)->first();

        if (!$user) {
            $user = User::where('email', $payload->email)->first();
        }

        if (!$user || $user == null) {
            $user = new User();
            $user->name = $user->name;
            $user->email = $user->email ?? $user->username;

            $user->save();
        }

        $token = $user->createToken('auth-pi-client');
        $data['token'] = $token->plainTextToken;
        $data['message'] = 'Login Success';

        return ResponseAPI($data);
    }
}
