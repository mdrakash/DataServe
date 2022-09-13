<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class CheckToken
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
        $token='';
        $key='barikoi';
        if ($request->hasHeader('token')) {
            $token=$request->header('token');
            try {
                $decoded = JWT::decode($token, new Key($key, 'HS256'));
                if($decoded->data=="01476225"){
                    return $next($request);
                }
                else{
                    return response()->json("Wrong Token Given", 401);  
                }
            } catch (\Throwable $th) {
                return response()->json("Invalid Token Given", 503);
            }
            
        } else {
            return response()->json("Invalid Token Given", 503);
        }
    }
}
