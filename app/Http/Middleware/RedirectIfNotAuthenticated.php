<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfNotAuthenticated
{
    public function handle($request, Closure $next)
    {
        if (!Session()->has('loginId')) {
            return redirect('/login')->with('fail','You cannot access dashboard directly');
        }

        return $next($request);
    }
}
