<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\DB;

class cekUserSession
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
        if (!$request->session()->exists('UserID')) {
            // user value cannot be found in session
            return redirect('login')->with('Login', 'Silahkan login kembali!');
        }

        return $next($request);
    }
}
