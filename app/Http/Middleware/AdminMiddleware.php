<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $adminEmail = 'admin@eventique.com';
        $adminPassword = 'admin123';

        if ($request->session()->get('admin_email') === $adminEmail && $request->session()->get('admin_password') === $adminPassword) {
            return $next($request);
        }

        return redirect()->route('admin.login')->withErrors(['message' => 'You are not authorized to access this page.']);
    }
}