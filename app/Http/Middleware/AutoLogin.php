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
        if ($request->filled('auth')) {
            // Ambil data pengguna dari session (sesuaikan dengan implementasi Anda)
            $userData = User::where('uid', base64_decode($request->auth))->first();

            // Login pengguna
            Auth::guard('web')->loginUsingId($userData->id);

            // Lanjutkan ke tujuan awal
            return $next($request);
        }


        return $next($request);
    }
}
