<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccessBackend
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
        if (Auth::user()->roles->first()->id != 4 && Auth::user()->roles->first()->id != 3) { // User && Editor
            return $next($request);
        } elseif (Auth::user()->roles->first()->id == 3) {
            return redirect('/dashboard/room')->with('error', 'You are not allowed for perform this action. You have been redirected to the room page.');
        } else {
            abort(403);
        }
    }
}
