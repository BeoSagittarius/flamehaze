<?php

namespace App\Http\Middleware;

use Closure;
use Sentinel;
use Illuminate\Database\Capsule\Manager as Capsule;

class Authenticate
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
        if (Sentinel::check()) {
            return $next($request);
        }

        return redirect()->route('auth.login.form')->withErrors('Bạn phải đăng nhập');
    }
}
