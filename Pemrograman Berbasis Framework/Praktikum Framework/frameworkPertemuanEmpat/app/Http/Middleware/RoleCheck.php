<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use illuminate\Support\Facades\Auth;

class RoleCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        foreach ($roles as $role){
            if (Auth::user()->role == $role){
                return $next($request);
            }
        }
        Auth::logout();
        return redirect('/login')->with('status', 'Anda tidak memiliki akses ke halaman tersebut');
    }
}
