<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class OrderMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        $orderUserId = $request->route()->parameter('order')->user_id;
        $userLogin = auth()->user()->login;

        if ($orderUserId == auth()->id()) {
            return $next($request);
        } else {
            return redirect()->back();
        }
    }
}
