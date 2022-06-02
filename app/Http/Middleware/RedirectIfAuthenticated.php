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
     * @param  string|null  ...$guards
     * @return mixed
     */
    // public function handle(Request $request, Closure $next, ...$guards)
    // {
    //     $guards = empty($guards) ? [null] : $guards;

    //     foreach ($guards as $guard) {
    //         if (Auth::guard($guard)->check()) {
    //             return redirect(RouteServiceProvider::HOME);
    //         }
    //         if (Auth::guard($guard)->check() && $guard == "teacher" ) {
    //             return redirect('teacher');
    //         }
    //         if (Auth::guard($guard)->check() && $guard == "parent") {
    //             return redirect('parent');
    //         }
    //     }

    //     return $next($request);
    // }


        public function handle($request, Closure $next, $guard = null)
        {
            if ($guard == "student" && Auth::guard($guard)->check()) {
                return redirect('/student');
            }
            if ($guard == "teacher" && Auth::guard($guard)->check()) {
                return redirect('/teacher');
            }
            if ($guard == "parent" && Auth::guard($guard)->check()) {
                return redirect('/parent');
            }
            
            if (Auth::guard($guard)->check()) {
                return redirect('/home');
            }
            return $next($request);
        }
    
}
