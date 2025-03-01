<?php

namespace App\Http\Middleware;
use Closure;
use Illuminate\Support\Facades\Auth;

class CheckPatient
{
    
    public function handle($request, Closure $next)
    {
        
        if (Auth::user() && Auth::user()->role =="patient"){
            return $next($request);

        }else {
            return redirect()-> route("login");
        }

    }
}
