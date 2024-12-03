<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle($request, Closure $next)
    {
        // Cek apakah user yang login adalah admin
        if (Auth::check() && Auth::user()->role === 'admin') {
            return $next($request);  // Akses diterima
        }

        // Jika bukan admin, arahkan ke halaman utama dengan pesan error
        return redirect('/welcome')->with('error', 'Access denied. You must be an admin to view the dashboard.');
    }
}
