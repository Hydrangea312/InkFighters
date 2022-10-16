<?php

namespace App\Http\Middleware;

use Closure;

class IsQuestion
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
        $user = $request->user();
        if ($user->question == 1) {
            abort(404);
        }

        return $next($request);

    }
}
