<?php

namespace App\Http\Middleware;

use App\Role;
use Closure;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
//        $user = Auth::user();
//
//        if ($user->role_id == 1) {
//            return $next($request);
//        }
//
//        foreach ($roles as $role) {
//            if ($role->id == 2) {}
//        }
        $roles = $this->CheckRoute($request->route());

        if ($request->user()->hasRole($roles) || !$roles)
        {
            return $next($request);
        }

        return abort(503, 'Anda Tidak Memiliki Hak Akses');
    }

    public function CheckRoute($route)
    {
        $actions = $route->getAction();
        return isset($actions['roles']) ? $actions['roles'] : null;
    }
}
