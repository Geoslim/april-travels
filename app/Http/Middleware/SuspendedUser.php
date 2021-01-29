<?php

namespace App\Http\Middleware;

use Closure;

class SuspendedUser
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
         if(auth()->check() && auth()->user()->status == 0)
        {
            $message = "Your Account is SUSPENDED!!! Please contact your Administrator, Thank You";
            auth()->logout();

            return redirect()->route('login')->withMessage($message);
            // alert()->success('Your Account is SUSPENDED!!! Please contact your Administrator','Thank You' )->autoclose(5000);
        }
        return $next($request);
    }
}
