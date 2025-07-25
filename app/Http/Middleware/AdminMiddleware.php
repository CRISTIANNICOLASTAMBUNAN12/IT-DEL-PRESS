<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->user()?->role !== 'admin') {
            abort(403, 'Akses ditolak. Kamu bukan admin, yaa 😘');
        }

        return $next($request);
    }
}
