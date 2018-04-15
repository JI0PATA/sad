<?php

namespace App\Http\Middleware;

use Closure;

class AuthAdmin
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
        if ($request->login === 'admin' && $request->password === 'admin') {
            $request->session()->push('admin', '1');
            return redirect()->route('admin');
        }

        return $next($request);
    }
}
