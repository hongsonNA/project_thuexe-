<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!Auth::check() || Auth::user()->role == '1' || Auth::user()->role == '2') {
            return redirect('/');
        } elseif (!Auth::check() || Auth::user()->role == '9' || Auth::user()->role == '10') {
            return $next($request);
        } else {
            return redirect('/');
        }
    }
}
