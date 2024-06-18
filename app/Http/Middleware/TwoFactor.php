<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class TwoFactor
{
    
    public function handle(Request $request, Closure $next)
    {


        $user = auth()->user();

        if(auth()->check() && $user->code){
          if(!$request->is('verifiy')){
           return redirect()->route('verifiy.index');
          }
        }


        return $next($request);
    }
}
