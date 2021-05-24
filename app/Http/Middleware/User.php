<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class User
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (auth()->user()->is_admin == 0 || auth()->user()->is_admin == 1) {
            if (auth()->user()->is_locked == 0) {
                return $next($request);
            }
            return redirect('/locked');
        } else {
            return redirect('/');
        }

    }
}