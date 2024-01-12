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
        $data['new_account'] = false;

        if (!$user) {
            $user = User::where('email', $payload->email)->first();
        }

        if (!$user || $user == null) {
            $user = new User();
            $user->name = $payload->name ?? $payload->email;
            $user->email = $payload->email ?? "";

            $user->save();
            $data['new_account'] = true;
        }

        $token = $user->createToken('auth-pi-client');
        $data['token'] = $token->plainTextToken;
        $data['message'] = 'Login Success';

        return ResponseAPI($data);
    }

    public function loginForAdmin(Request $request)
    {
        $request->validate([
            // 'email' => 'required|email',
            'username' => 'required',
            'password' => 'required'
        ]);

        if(!Auth::guard('web_admin')->attempt(['username'=> $request->username,'password'=> $request->password])){
            return ResponseAPI('Username atau Password Anda Salah', 401);
        }

        $user = Auth::guard('web_admin')->user();
        $data['token'] = $user->createToken('auth-pi-admin')->plainTextToken;
        $data['user'] = $user->makeHidden(['password']);

        return ResponseAPI($data);
    }
}
