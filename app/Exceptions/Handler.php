<?php

namespace App\Exceptions;

use Throwable;
use Illuminate\Http\Response;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;
use Tymon\JWTAuth\Exceptions\TokenBlacklistedException;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    public function render($request, Throwable $e) : JsonResponse
    {
        if($e instanceof UnauthorizedHttpException){

            $preException = $e->getPrevious();

            if($preException instanceof TokenExpiredException){

                return response()->json([
                    'data'      => null,
                    'status'    => false,
                    'err_'      => [
                        'message'   => 'Token Expirado',
                        'code'      => 1
                    ]
                ]);

            }else if($preException instanceof TokenInvalidException){

                return response()->json([
                    'data'      => null,
                    'status'    => false,
                    'err_'      => [
                        'message'   => 'Token Inválido',
                        'code'      => 1
                    ]
                ]);

            }else if($preException instanceof TokenBlacklistedException){

                return response()->json([
                    'data'      => null,
                    'status'    => false,
                    'err_'      => [
                        'message'   => 'Token Blacklisted',
                        'code'      => 1
                    ]
                ]);
            }

            if($e->getMessage() === 'Token not provided'){

                return response()->json([
                    'data'      => null,
                    'status'    => false,
                    'err_'      => [
                        'message'   => 'Token not provided',
                        'code'      => 1
                    ]
                ]);

            }else if($e->getMessage() === 'Usuário não encontrado!'){

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

        return parent::render($request, $e);
    }
}
