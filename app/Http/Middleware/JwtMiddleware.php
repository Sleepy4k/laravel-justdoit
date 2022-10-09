<?php

namespace App\Http\Middleware;

use Closure;
use Exception;
use App\Traits\ApiRespons;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Http\Middleware\BaseMiddleware;

class JwtMiddleware extends BaseMiddleware
{
    use ApiRespons;

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        try {
            $user = JWTAuth::parseToken()->authenticate();
        } catch (Exception $e) {
            if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenInvalidException){
                return $this->createResponse(401, 'Token is Invalid',
                    [
                        'error' => 'Token is not registered in server'
                    ],
                    [
                        route('landing')
                    ]
                );
            }else if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenExpiredException){
                return $this->createResponse(401, 'Token is Expired',
                    [
                        'error' => 'This token has passed its expiration time'
                    ],
                    [
                        route('landing')
                    ]
                );
            }else{
                return $this->createResponse(401, 'Authorization Token not found',
                    [
                        'error' => 'Please double check it if you filled token'
                    ],
                    [
                        route('landing')
                    ]
                );
            }
        }
        
        return $next($request);
    }
}