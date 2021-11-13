<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccessBackendRoleEditor
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
        if (auth()->user()->roles->first()->id != 3) {
            redirect('/dashboard/room')->with('error', 'You are not abilited to access a this section of the dashboard.');
        }
        return $next($request);
    }
}
