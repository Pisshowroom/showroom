<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class AutoLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        // Cek apakah session 'your_custom_session' ada di browser
        if ($request->session()->has('api_token')) {
            // Ambil data pengguna dari session (sesuaikan dengan implementasi Anda)
            $userData = User::where('api_token', $request->session()->get('api_token'))->first();

            // Login pengguna
            Auth::loginUsingId($userData['user_id']);

            // Lanjutkan ke tujuan awal
            return $next($request);
        }
        return $next($request);
    }
}
