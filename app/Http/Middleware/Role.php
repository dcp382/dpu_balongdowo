<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$allowed_roles)
    {
       
       if(request()->user()->is_admin == 1){
         $role = 'admin';
       }else{
        $role = 'user';
       }

       if(in_array($role,$allowed_roles)){
        return $next($request);
       }

       if(request()->user()->is_admin == 1){
        return redirect()->route('dashboard');
       }else{
        return redirect()->route('dashboard_user');
       }
       return redirect('/');
    }
}
