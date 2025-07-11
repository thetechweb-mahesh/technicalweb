<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)


    {
        if(Auth::check()){

        if(Auth::user()->role_as == '1') //1 is Admin & 0 is common user

        {
           return $next($request);

        }
        else{

         return redirect('/home')->with('status','Asses Denied! As You are not an Admin');

        }
   }
      else{

       return redirect('/login')->with('status','please login first');

      }
   }
}
