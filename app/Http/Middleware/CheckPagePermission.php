<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckPagePermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $pageSlug): Response
    {
        $admin = Auth::guard('admin')->user();

        if (!$admin) {
            return redirect()->route('admin.login');
        }

        // Super Admin has access to everything
        if ($admin->isSuperAdmin()) {
            return $next($request);
        }

        // Check if admin's role has permission for this page
        if (!$admin->hasPagePermission($pageSlug)) {
            abort(403, 'You do not have permission to access this page.');
        }

        return $next($request);
    }
}
