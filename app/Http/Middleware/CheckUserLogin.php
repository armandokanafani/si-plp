<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckUserLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $rules)
    {
        if (!Auth::check()) {
            return redirect('login');
        }

        $user = Auth::user();
        if ($user->level == $rules)
            return $next($request);

        return redirect('login')->with('error', "Anda tidak memiliki akses");
    }
}
