<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminCheck
{

    public function handle(Request $request, Closure $next)
    {

        if(Auth::check()){
            if(Auth::user()->user_type == 1){
                  return $next($request);
            }else{
                 return redirect('/home');
            }
        }else{
            return redirect('/home');

        }



    }
}
