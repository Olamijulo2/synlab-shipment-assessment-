<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use Illuminate\Auth\Middleware\Authenticate as Middleware;


class EnsureIsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    // protected function redirectTo($request)
    // {
    //     if (! $request->expectsJson()) {
    //         return route('admin-login-form');
    //     }
    // }
    // public function handle(Request $request, Closure $next, ...$guards)
    // {
    //     $guards = empty($guards) ? [null] : $guards;

    //     foreach ($guards as $guard) {
    //         if ($guard == 'admin' && Auth::guard($guard)->check()) {
    //             return redirect('/admin/dashboard');
    //         // }else{
    //         //     return route('admin-login-form');
    //         }
    //     }

    //     return $next($request);
    // }


    // protected function redirectTo($request)
    // {
    //     if (! $request->expectsJson()) {
    //         return route('admin-login-form');
    //     }
    // }
    // public function handle(Request $request, Closure $next, $guard = null)
    // {
            
        
        
    //     return $next($request);
    //         if($guard == "admin" && Auth::guard($guard)->check()) {

    //             return redirect('/admin/dashboard');
                
                
    //         }
    //         if ($request->route()->getPrefix() == 'admin') {
    //             return $next($request);
    //         }
    //         else{
    //             return abort(401);
    //             return $next($request);
    //         }
            
    
                  
    //                  // OR SOME ROUTE YOU WANT

    // }
            
}