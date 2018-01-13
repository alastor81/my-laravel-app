<?php

namespace myapp\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
class IsManager
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
            if (Auth::user()->type != 'Manager') {
                return abort(403, 'This Is NOT Your Page !');
            } else {
                return $next($request);
            }
        } else {
            return abort(403, 'This Is NOT Your Page !');
        }
    }
}
