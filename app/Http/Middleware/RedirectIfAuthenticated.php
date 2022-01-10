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
    public function handle(Request $request, Closure $next, ...$guard)
    {
        //$guards = empty($guards) ? [null] : $guards;

        if (Auth::guard($guard)->check() && Auth::user()->role_id == 1) {
            return redirect()->route('admin.dashboard.index');
        } elseif (Auth::guard($guard)->check() && Auth::user()->role_id == 2) {
            return redirect()->route('directeur.dashboard.index');
        } elseif (Auth::guard($guard)->check() && Auth::user()->role_id == 3) {
            return redirect()->route('responsable.dashboard.index');
        } elseif (Auth::guard($guard)->check() && Auth::user()->role_id == 4) {
            return redirect()->route('gestionnaire.dashboard.index');
        } elseif (Auth::guard($guard)->check() && Auth::user()->role_id == 5) {
            return redirect()->route('user.dashboard.index');
        } else {
            return $next($request);
        }

        //return $next($request);
    }
}
