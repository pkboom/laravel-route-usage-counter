<?php

namespace Pkboom\RouteUsage\Http\Middleware;

use Closure;
use Pkboom\RouteUsage\Models\RouteHistory;

class RecordRoutes
{
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        RouteHistory::create([
            'domain' => $request->route()->domain(),
            'method' => $request->method(),
            'uri' => $request->path(),
        ]);

        return $response;
    }
}