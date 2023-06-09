<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$guard)
    {
        $guards = empty($guards) ? [null] : $guards;


        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                if (Auth::user()->is_admin == 1) {
                     return redirect()->route('dashboard');
                } else {
                    return redirect()->route('dashboard_user');
                }
            }
        }

        return $next($request);
    }
}


