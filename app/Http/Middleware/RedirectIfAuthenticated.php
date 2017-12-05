<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            $user = Auth::user();
            if($user['status'] == 'admin')
            {
                return redirect('/admin_page');
            }
            else if($user['status'] == 'dosen')
            {
                return redirect('/dosen_page');
            }
            else
            {
                return redirect('/mahasiswa');
            }
        }

        return $next($request);
    }
}
