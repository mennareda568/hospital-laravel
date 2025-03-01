<?php

namespace App\Http\Middleware;
use Closure;
use Illuminate\Support\Facades\Auth;

class CheckDoctor
{
    
    public function handle($request, Closure $next)
    {
        if (Auth::user() && Auth::user()->role =="doctor"){
            return $next($request);

        }else {
            return redirect()-> route("login");
        }

    }
}
