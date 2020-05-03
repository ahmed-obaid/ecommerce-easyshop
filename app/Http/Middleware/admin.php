<?php

namespace App\Http\Middleware;

use Closure;

class admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(auth()->guest()){

            return redirect('login'); 
        }

        if(auth()->user()->group !=='admin'){

            return redirect('/home'); 
        }

        return $next($request);
    }
}
