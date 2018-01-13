<?php

namespace myapp\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class IsStudent
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            if (Auth::user()->type != 'Student') {
                return redirect('/login');
            } else {
                return $next($request);
            }
        } else {
            return redirect('/login');
        }
    }
}
