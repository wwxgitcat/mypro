<?php

namespace App\Http\Middleware\Admin;

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
        // if($request->get("age")>30){}
        // return direct("/login2");
        return redirect()->action('UserController@profile', [1]);
        return $next($request);
    }
}
