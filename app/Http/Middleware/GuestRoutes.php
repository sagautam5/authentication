<?php

namespace App\Http\Middleware;

use Closure;

class GuestRoutes
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
        if($request->user()==null)
        {
            return response("You don't have access to this page",404);
        }


        if ($request->user()->role_id==2) {
            return $next($request);
        }
        return redirect()->back()->with("alert-warning","You do not have access to do that.");
    }
}
