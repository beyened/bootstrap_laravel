<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        //based on request from route or web return to home
//        return redirect('/');

//        $user = Auth::user();
//
//        if ($user->isAdmin()){
//            return redirect()->intended('/admin');
////            return view('admin');
//        }


//        return $next($request);
    }
}
