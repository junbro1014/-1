<?php

namespace App\Http\Middleware;

use App\Services\Message;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class GlobalMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param Closure(Request): (Response) $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        Message::addMessage('Global Middleware');
        return $next($request);
    }
}
