<?php

namespace App\Http\Middleware;

use Closure;
use Sentinel;
class AdminUser
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
        if(Sentinel::check() && Sentinel::getUser()->roles()->first()->slug == 'admin')
        {   return $next($request);

        }else{
            Sentinel::logout();
            return redirect('/admin');

        }
        //return $next($request);
    }
}
