<?php

namespace App\Http\Middleware;

use Closure;

class Roles
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, ...$roles)
    {
        if(!$request->user()->authorizeRoles($roles)) {
            abort(403, 'You not have access this page');
        }
        
        return $next($request);
    }
}
