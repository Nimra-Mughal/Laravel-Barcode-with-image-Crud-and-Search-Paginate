<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth()->user()->usertype=="admin"){
            return $next($request);
        }
        // elseif(Auth()->user()->usertype=="user"){
        //     return view('dashboard');
        // }
        else{
            return back();
        }
    }
}
