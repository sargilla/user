<?php

namespace Sargilla\User\Http\Middleware;

use Closure;

/**
 * Class GuestUser
 * @package Sargilla\User\Http\Middleware
 */
class GuestUser
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
        view()->share('logueado', auth()->check());
        view()->share('user', auth()->user() ?: new \Sargilla\User\GuestUser);
        return $next($request);
    }
}
