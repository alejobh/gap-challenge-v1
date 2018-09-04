<?php

namespace App\Http\Middleware;

use Closure;
use App\Helpers\AuthHelper as AuthHelper;

class AuthBasic
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
    $secure_request = AuthHelper::CheckAuth($request->header('Authorization'));
    if($secure_request === false) {
      return response()->json(['success' => false, 'error_code'=> 401, 'error_msg' => 'Not authorized']);
    }
    return $next($request);
  }
}
