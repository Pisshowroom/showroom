<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next,  ...$roles): Response
    {
        if (!Auth::guard('web')->check()) // I included this check because you have it, but it really should be part of your 'auth' middleware, most likely added as part of a route group.
            return $next($request);
        if (Auth::guard('web')->check()) {
            if (in_array(Route::currentRouteName(), ['buyer.login','buyer.register']))
                return redirect()->route('dashboard.settings');
            else
                return $next($request);
        }
        return $next($request);
    }
}
