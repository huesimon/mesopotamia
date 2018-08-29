<?php

namespace App\Http\Middleware;

use Closure;

class CheckPremium
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
		if ($request->premium == 1) {
            return redirect('home');
        }
        return $next($request);
    }
}
