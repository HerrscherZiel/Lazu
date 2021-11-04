<?php

namespace App\Http\Middleware;

use Closure;

class Wali
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
        if ($request->user() && $request->user()->role != 'wali')
        {
            return redirect('forbid');
        }
        return $next($request);

    }
}
