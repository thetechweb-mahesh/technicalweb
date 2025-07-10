<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
   //  public function handle(Request $request, Closure $next): Response
   //  {
   //      if(Auth::check()){

   //      if(Auth::user()->role_as == '1') //1 is Admin & 0 is common user

   //      {
   //         return $next($request);

   //      }
   //      else{

   //       return redirect('/home')->with('status','Asses Denied! As You are not an Admin');

   //      }
   // }
   //    else{

   //     return redirect('/login')->with('status','please login first');

   //    }
   // }

   public function handle(Request $request, Closure $next): Response
{
    if (Auth::check()) {

        if (in_array(Auth::user()->role_as, ['1', '2'])) {
            return $next($request);
        } else {
            return redirect('/home')->with('status', 'Access Denied! You are not authorized.');
        }

    } else {
        return redirect('/login')->with('status', 'Please login first');
    }
}

}
