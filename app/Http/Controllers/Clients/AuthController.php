<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:api-admin', ['except' => ['logout', 'logout']]);
        $this->middleware('guest:web', ['except' => ['logout', 'logout']]);
        // $this->middleware('guest:api-admin')->except('logout');
        // $this->middleware('guest:user')->except('logout');
    }
    public function loginUsingGoogle(Request $request)
    {
        $request->validate([
            'uid' => 'required',
        ]);
        if ($request->uid) {
            $checkUser = User::where('uid', $request->uid)->first();
            if ($checkUser) {
                Auth::guard('web')->loginUsingId($checkUser->id, true);
                return response()->json([
                    "status" => "success",
                    "message" => "Berhasil login"
                ]);
            } else {
                $checkUser2 = User::where('email', $request->email)->first();
                if ($checkUser2) {
                    Auth::guard('web')->loginUsingId($checkUser->id, true);
                    return response()->json([
                        "status" => "success",
                        "message" => "Berhasil login"
                    ]);
                } else {
                    return response()->json([
                        "status" => "error",
                        "message" => "Kamu belum mempunyai akun,silahkan mendaftar terlebih dahulu"
                    ]);
                }
            }
        } else {
            return response()->json([
                "status" => "error",
                "message" => "Terjadi kesalahan pada google auth"
            ]);
        }
    }
    public function loginEmail(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        if (Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password])) {
            // Authentication passed...
            return response()->json([
                "status" => "success",
                "message" => "Berhasil login"
            ]);
        } else {
            return response()->json([
                "status" => "error",
                "message" => "Email atau password kamu salah"
            ]);
        }
    }

    public function registerUsingGoogle(Request $request)
    {
        $request->validate([
            'uid' => 'required',
        ]);
        if ($request->uid) {
            $checkUser = User::where('uid', $request->uid)->first();
            if ($checkUser) {
                Auth::guard('web')->loginUsingId($checkUser->id, true);
                return response()->json([
                    "status" => "info",
                    "message" => "Kamu sudah punya akun"
                ]);
            } else {
                $checkUser2 = User::where('email', $request->email)->first();
                if ($checkUser2) {
                    Auth::guard('web')->loginUsingId($checkUser->id, true);
                    return response()->json([
                        "status" => "info",
                        "message" => "Kamu sudah punya akun"
                    ]);
                } else {
                    $user = new User;
                    $user->api_token = $request->api_token;
                    $user->uid = $request->uid;
                    $user->api_token = bcrypt($request->api_token);
                    $user->name = $request->displayName;
                    $user->email = $request->email;
                    if ($request->photoURL) {
                        try {
                            $contents = file_get_contents($request->photoURL);
                            $name = '/' . substr($request->photoURL, strrpos($request->photoURL, '/') + 1);
                            Storage::put($name, $contents);
                            $user->image = "storage$name";
                            $user->save();
                        } catch (\Throwable $th) {
                        }
                    }
                    // $user->image = $request->photoURL;
                    $user->save();
                    $address = new Address();
                    $address->user_id = $user->id;
                    $address->phone_number = $request->phoneNumber;
                    $address->main = 1;
                    $address->save();
                    Auth::guard('web')->loginUsingId($user->id, true);
                    return response()->json([
                        "status" => "success",
                        "message" => "Berhasil Mendaftar"

                    ]);
                }
            }
        } else {
            return response()->json([
                "status" => "error",
                "message" => "Terjadi kesalahan pada google auth"
            ]);
        }
    }

    public function registerEmail(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        if (Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return response()->json([
                "status" => "info",
                "message" => "Kamu sudah punya akun"
            ]);
        } else {
            $user = new User;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->save();

            $address = new Address();
            $address->user_id = $user->id;
            $address->main = 1;
            $address->save();
            Auth::guard('web')->loginUsingId($user->id, true);
            return response()->json([
                "status" => "success",
                "message" => "Berhasil Mendaftar"
            ]);
        }
    }

    public function logout()
    {
        Auth::guard('web')->logout();
        return redirect()->route('buyer.home')->with('success', 'Kamu berhasil logout');
    }
}
