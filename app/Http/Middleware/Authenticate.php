<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        //return $request->expectsJson() ? null : route('login');
        if (!$request->expectsJson()){
            if ($request->is('admin') || $request->is('admin/*')){
                return route('admin.showLogin');
            }
            else{
                return  route('admin.showLogin');
            }
        }
    }
}
