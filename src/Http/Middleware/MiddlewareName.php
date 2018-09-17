<?php

namespace SoldatiGabriele\PackageName\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class MiddlewareName extends BaseMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        return $next($request);
    }
}
