<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class ValidUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {
        echo " You are now in validuser middleware ";
        echo "<h3> " . $role  . " </h3>";
        if (Auth::user()->role === $role) {
            return $next($request);
            // return redirect()->route('dashboard');
        } else if (Auth::user()->role === 'admin') {
           // return $next($request);
             return redirect()->route('admin');
        } else {
            return redirect()->route('login');
        }
    }
    public function terminate(Request $request, Response $responce): void
    {
        echo "<h3 class='text-danger'>we are now terminate validuser  Middleware  </h3> ";
    }
}
