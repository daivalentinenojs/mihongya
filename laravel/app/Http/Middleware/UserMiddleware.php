<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (auth()->guard('web')->check() && Session::has('user_email')) {
            $userEmail = Session::get('user_email');

            $user_check = User::where('email',$userEmail)->whereNull('deleted_at')->first();
            if ($user_check) {
                return $next($request);
            } else {
                return redirect()->route('logout', app()->getLocale());
            }
        }

        return redirect()->route('logout', app()->getLocale());
    }
}
