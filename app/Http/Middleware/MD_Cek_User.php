<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class MD_Cek_User
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
        if($request -> session() -> has('user_login')) {
            return $next($request);
        }else{
            return redirect('/');
        }
    }
}
