<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Http\Controllers\Api;

use Tymon\JWTAuth\JWTAuth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Lang;
use App\Http\Resources\UsuarioResource;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AuthController extends Controller
{
    use AuthenticatesUsers;

    public function login(Request $request)
    {
        $this->validateLogin($request);

        $credentials = $this->credentials($request);

        $jwt = app(JWTAuth::class);

        $token = $jwt->attempt($credentials);

        return $token ?
            ['token' => $token] :
            response()->json([
                'error' => Lang::get('auth.failed'),
            ], 400);
    }

    public function logout()
    {
        Auth::guard('api')->logout();

        return response()->json([], 204);
    }

    public function me()
    {
        $user = Auth::guard('api')->user();

        return new UsuarioResource($user);
    }

    public function refresh()
    {
        $token = Auth::guard('api')->refresh();

        return ['token' => $token];
    }
}
