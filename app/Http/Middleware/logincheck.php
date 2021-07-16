<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
//check if user is logged in inorder to show all orders
class logincheck
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
				if($request->session()->has('user')){
					return $next($request);
				}
				return redirect('admin');
    }
}
