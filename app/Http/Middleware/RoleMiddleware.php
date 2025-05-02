<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, $role): RedirectResponse|\Illuminate\Http\Response
    {
        if (!Auth::check()) {
            return redirect('/login');
        }

        $user = Auth::user();

        if ($user->role !== $role) {
            return redirect('/no-access');
        }

        return $next($request);
    }
}
