<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next): Response
    {
    
        if (Auth::check() && Auth::user()->usertype == 'admin') {
            return redirect('/admin'); // Allow admin to proceed
        }else{
            $response = $next($request);
            return $response;
        }

    }
}
