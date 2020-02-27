<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Router
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
        if(Auth::user())
        {
            if(Auth::user()->role->name == 'superadmin')
            {
                return view('admin.index');
            }
            elseif(Auth::user()->role->name == 'user')
            {
                return view('home');
            }
        }
        return $next($request);
    }
}
