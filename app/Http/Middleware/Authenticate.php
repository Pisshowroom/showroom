<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {

        if (preg_match('/PiBrowser/', $request->header('user_agent'), $matches)) {
        }

        return $request->expectsJson() ? null : route('buyer.home');
    }
}
