<?php

namespace App\Http\Middleware;

use Closure;
use App\Helpers\AuthHelper;

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
    //Calls the method CheckAuth of the App\Helpers\AuthHelper Helper Class sending the Authorization Header to check if its valid or not
    $secure_request = AuthHelper::checkAuth($request->header('Authorization'));
    if($secure_request === false) {
      //If is not valid then will return 401 Not Authorized
      return response()->json(['success' => false, 'error_code'=> 401, 'error_msg' => config('constants.HTTP.401')]);
    }
    //if its valid it will continue in the next
    return $next($request);
  }
}
