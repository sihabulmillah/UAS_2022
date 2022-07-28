<?php

namespace App\Http\Middleware;


use Closure;
use Illuminate\Http\Request;

class Role
{
    public function handle(Request $request, Closure $next, ...$levels)
    {
        if (in_array($request->user()->role, $levels)) {
            return $next($request);
        }
        //diarahkan ke halaman login
        return redirect('/masuk');
    }
}
