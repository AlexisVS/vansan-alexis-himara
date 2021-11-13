<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AccessBackendRoleWebmaster
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if ( auth()->user()->roles->first()->id !== 2) {
            return $next($request);
        }
        return redirect()->back()->with('error', 'You are not abilited to access a this section of the dashboard.');
    }
}
