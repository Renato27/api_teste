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
                    'message' => 'Token Inválido',
                ]);

            }else if($th instanceof \Tymon\JWTAuth\Exceptions\TokenExpiredException){

                return response()->json([

                    'message'   => 'Token Expirado!',
                ]);

            }else{

                if($th->getMessage() === 'Usuário não encontrado!'){

                    return response()->json([

                        'message'   => 'Usuário não encontrado!',

                    ]);
                }
            }

            return response()->json([

                    'message'   => 'Token de autorização não encontrado!',
            ]);
        }
        return $next($request);
    }
}
