<?php

namespace App\Http\Middleware;

use Closure;

class CheckAge 
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
        
        if($request->age <= 12){
            return response(view('auth.forrbiden-under-12'));
        }
            return $next($request);
    }
}
