<?php

namespace App\Http\Middleware;

use Closure;

class AdminMiddleware
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
        if(auth()->check() && Auth()->user()->role->name === 'user')
        {
             return redirect()->route('quiz.index')->with('error',"you dont have admin access");
        }
        return $next($request); 
    }
}
