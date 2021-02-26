<?php

namespace App\Http\Middleware;

use Closure;

class FieldOfficerMiddleware
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
        if(auth::check() && Auth::user()->user_type_id == 6){
            return $next($request);
        }
        else {
            return redirect('/login');
        }
    }
}
