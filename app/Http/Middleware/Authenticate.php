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
        if (!$request->expectsJson()) {
            if (auth()->check()) {
                return auth()->user()->user_type == 'admin' ? '/admin/dashboard' : '/dashboard';
            }
            return route('login');
        }
    }
}
