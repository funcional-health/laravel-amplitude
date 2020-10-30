<?php

namespace LaravelAmplitude\Http\Middleware;

use Closure;
use LaravelAmplitude\Events\SendQueuedEvents;

class AmplitudeLateSendMiddleware
{
    public function handle($request, Closure $next)
    {
        return $next($request);
    }

    public function terminate($request, $response)
    {
        event(new SendQueuedEvents());
    }
}
