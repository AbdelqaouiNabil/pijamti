<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthCheck
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

        if(!session()->has('loggedUser') && $request->path() != 'auth/login'){
            return redirect('auth/login')->with('fail','you must be logged in');
        }
        if(session()->has('loggedUser') && $request->path() == 'auth/login'){
            return back();
        }
        $response = $next($request);

        return $response->header('Cache-Control','nocache, no-store, max-age=0, must-revalidate')

            ->header('Pragma','no-cache')

            ->header('Expires','Sun, 02 Jan 1990 00:00:00 GMT');
    }
}
