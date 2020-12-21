<?php

namespace App\Http\Middleware;

use Closure;
use Exception;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Http\Middleware\BaseMiddleware;

class JwtMiddleware extends BaseMiddleware
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
        try {
            $usuario = JWTAuth::parseToken()->authenticate();

            if(!$usuario)
                throw new Exception('Usuário não encontrado!');

        } catch (\Throwable $th) {
            if($th instanceof \Tymon\JWTAuth\Exceptions\TokenInvalidException){

                return response()->json([
                    'data'      => null,
                    'status'    => false,
                    'err_'      => [
                        'message' => 'Token Inválido',
                        'code'    => 1
                    ]
                ]);

            }else if($th instanceof \Tymon\JWTAuth\Exceptions\TokenExpiredException){

                return response()->json([
                    'data'      => null,
                    'status'    => false,
                    'err_'      => [
                        'message'   => 'Token Expirado!',
                        'code'      => 1
                    ]
                ]);

            }else{

                if($th->getMessage() === 'Usuário não encontrado!'){

                    return response()->json([
                        'data'      => null,
                        'status'    => false,
                        'err_'      => [
                            'message'   => 'Usuário não encontrado!',
                            'code'      => 1
                        ]
                    ]);
                }
            }

            return response()->json([
                'data'      => null,
                'status'    => false,
                'err_'      => [
                    'message'   => 'Token de autorização não encontrado!',
                    'code'      => 1
                ]
            ]);
        }
        return $next($request);
    }
}
