<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

final class AdminMiddleware
{
    public function handle(Request $request, Closure $next): mixed
    {
        if (!Auth::check() || Auth::user()->type !== 'admin') {
            abort(403, 'Accès non autorisé.');
        }

        return $next($request);
    }
} 