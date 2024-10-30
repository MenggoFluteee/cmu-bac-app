<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next, $role)
    {
        if (Auth::check() && Auth::user()->role === $role) { // Assuming 'role' is the field name
            return $next($request);
        }

        // Redirect if the user does not have the required role
        return redirect()->route('unauthorizedPage'); // Redirect to an unauthorized page
    }
}
