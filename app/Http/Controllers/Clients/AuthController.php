<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\User;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Session;
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
    public function piLogin(Request $request)
    {
        $request->validate([
            'uid' => 'required',
        ]);

        try {
            $platformAPIClient = new Client([
                'base_uri' => "https://api.minepi.com",
                'timeout'  => 20000,
                'headers'  => [
                    'Authorization' => 'Bearer ' . $request->api_token
                ],
            ]);

            $response = $platformAPIClient->get("v2/me");
        } catch (\Throwable $th) {
            return response()->json([
                "status" => "error",
                "message" => "Terjadi kesalahan pada pi auth"
            ], 400);
        }


        if ($request->uid) {
            $checkUser = User::where('uid', $request->uid)->first();
            if ($checkUser && $checkUser->id) {
                Auth::guard('web')->loginUsingId($checkUser->id, true);
                return response()->json([
                    "status" => "success",
                    "api_token" => $checkUser->api_token,
                    "message" => "Berhasil login"
                ]);
            } else {
                $checkUser2 = User::withTrashed()->where('uid', $request->uid)->first();
                if ($checkUser2) {
                    $checkUser2->phone_number = null;
                    $checkUser2->email = uniqid() . $checkUser2->email;
                    $checkUser2->save();
                } else {
                    $user = new User;
                    $user->uid = $request->uid;
                    $user->api_token = bcrypt($request->api_token);
                    $user->name = $request->username;
                    $user->email = $request->username . '@gmail.com';
                    // $user->image = $request->photoURL;
                    $user->save();
                    Auth::guard('web')->loginUsingId($user->id, true);
                    return response()->json([
                        "status" => "success",
                        "api_token" => $user->api_token,
                        "message" => "Berhasil Mendaftar"

                    ]);
                }
            }
        } else {
            return response()->json([
                "status" => "error",
                "message" => "Terjadi kesalahan pada pi auth"
            ]);
        }
    }

    public function loginSession(Request $request)
    {
        $request->session()->put('api_token', $request->api_token);
        $session = $request->session()->get('api_token');

        $user = User::where('api_token', $session)->first();
        if ($user) {
            $request->session()->put('user', $user);
        }

        Auth::login($user, true);

        if ($user) {
            // if (preg_match('/PiBrowser/', $request->header('user_agent'), $matches)) {
            return redirect()->route('buyer.home', ['auth' => base64_encode($user->uid)]);
            // }
            return redirect()->route('buyer.home');
        }
    }


    public function loginUsingGoogle(Request $request)
    {
        $request->validate([
            'uid' => 'required',
        ]);
        if ($request->uid) {
            $checkUser = User::where('uid', $request->uid)->first();
            if ($checkUser && $checkUser->id) {
                Auth::guard('web')->loginUsingId($checkUser->id, true);
                return response()->json([
                    "status" => "success",
                    "message" => "Berhasil login"
                ]);
            } else {
                $checkUser2 = User::where('email', $request->email)->first();
                if ($checkUser2 && $checkUser2->id) {
                    Auth::guard('web')->loginUsingId($checkUser2->id, true);
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
            if (preg_match('/PiBrowser/', $request->header('user_agent'), $matches)) {
                $user = $this->getUser();
            } else $user = null;
            return response()->json([
                "status" => "success",
                "message" => "Berhasil login",
                "user" => $user ?? null
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
            if ($checkUser && $checkUser->id) {
                Auth::guard('web')->loginUsingId($checkUser->id, true);
                return response()->json([
                    "status" => "info",
                    "message" => "Kamu sudah punya akun"
                ]);
            } else {
                $checkUser2 = User::where('email', $request->email)->first();
                if ($checkUser2 && $checkUser2->id) {
                    Auth::guard('web')->loginUsingId($checkUser2->id, true);
                    return response()->json([
                        "status" => "info",
                        "message" => "Kamu sudah punya akun"
                    ]);
                } else {
                    $user = new User;
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
            if (preg_match('/PiBrowser/', $request->header('user_agent'), $matches)) {
                $users = $this->getUser();
            } else $users = null;
            return response()->json([
                "status" => "info",
                "message" => "Kamu sudah punya akun",
                "user" => $users ?? null
            ]);
        } else {
            $user = new User;
            $user->name = $request->name;
            $user->email = $request->email;
            $randomInteger = '';
            for ($i = 0; $i < 21; $i++) {
                $randomInteger .= mt_rand(0, 9);
            }
            $user->uid = (int) $randomInteger;
            $user->password = bcrypt($request->password);
            $user->save();

            Auth::guard('web')->loginUsingId($user->id, true);
            if (preg_match('/PiBrowser/', $request->header('user_agent'), $matches)) {
                $users = $this->getUser();
            } else $users = null;

            return response()->json([
                "status" => "success",
                "message" => "Berhasil Mendaftar",
                "user" => $users ?? null

            ]);
        }
    }

    private function getUser()
    {
        if (Auth::guard('web')->user() && Auth::guard('web')->user()->id) {
            $user = Auth::guard('web')->user();
        } else {
            $user = null;
        }
        return $user;
    }

    public function logout()
    {
        Auth::guard('web')->logout();
        return redirect()->route('buyer.home')->with('success', 'Kamu berhasil logout');
    }
}
