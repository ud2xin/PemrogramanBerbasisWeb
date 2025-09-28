<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RoleCheck
{
    public function handle($request, Closure $next, ...$roles)
    {
        if (!Auth::check()) {
            return redirect('/login');
        }

        // cek apakah role user ada di daftar roles
        if (!in_array(Auth::user()->role, $roles)) {
            return abort(403, 'Anda tidak memiliki akses.');
        }

        return $next($request);
    }
}
