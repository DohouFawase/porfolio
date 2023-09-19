<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddlewar
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
       if (Auth::check()) {
        # code...
        if (Auth::user()->role == '1') {
            # code...
        return $next($request);

        } else {
        return to_route('/')->with('message', "Vous n'être pas l'admin");

        }
       } 
       else
        {
        # code...
        return redirect('/')->with('message', "Acces interdi!!!!!!");
       }
       
       
       
       return $next($request);
       
    }
}
