<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class PreventSpam
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next)
    {
        if (! $this->passes($request) && ! app()->runningInConsole()) {
            info('Spam detected', $request->all());

            return response()->noContent();
        }

        return $next($request);
    }

    /**
     * Determine if the request passes the spam test.
     */
    public function passes(Request $request): bool
    {
        return $request->has('honey.blank')
            && $request->isNotFilled('honey.blank')
            && rescue(fn () => decrypt($request->honey['from'])->isPast(), false, false)
            && rescue(fn () => decrypt($request->honey['js']) === 'valid', false, false);
    }
}
