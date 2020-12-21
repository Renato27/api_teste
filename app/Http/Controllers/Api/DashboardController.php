<?php

namespace App\Http\Controllers\Api;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Http\Controllers\Controller;
use App\Models\Usuario\Usuario;
use Illuminate\Support\Facades\Hash;
use Tymon\JWTAuth\Exceptions\JWTException;
use App\Repositories\Contracts\UsuarioRepository;

class DashboardController extends Controller
{
    /**
     * Undocumented variable
     *
     * @var array
     */
    protected array $data = [];


    public function __construct()
    {
        $this->data = [
            'status'    => false,
            'code'      => 401,
            'data'      => null,
            'err'       => [
                'code'      => 1,
                'message'   => 'Não autorizado!'
            ]
        ];

        $this->middleware('api', ['except' => ['login']]);
    }

    public function login(Request $request, UsuarioRepository $usuarioRepository) : JsonResponse
    {
        $credentials = $request->only('email', 'senha');

        $usuario = $usuarioRepository->verificarCredenciasUsuario($credentials['email'], $credentials['senha']);

        try {
            if(!$token = JWTAuth::fromUser($usuario)){
                throw new Exception('Credencial Inválida!');
            }

            $this->data = [
                'status'    => true,
                'code'      => 200,
                'data'      => [
                    '_token'    => $token
                ],
                'err'       => null
            ];
        } catch (\Throwable $th) {
            $this->data['err']['message'] = $th->getMessage();
            $this->data['code'] = 401;

        } catch(JWTException $e){
            $this->data['err']['message'] = 'Não foi possível criar um token.';
            $this->data['code'] = 500;
        }

        return response()->json($this->data, $this->data['code']);
    }

    public function logout() : JsonResponse
    {
        auth()->logout();

        $data = [
            'status' => true,
            'code'   => 200,
            'data'   => [
                'message'   => 'Logout feito com sucesso!'
            ],
            'err'    => null
        ];

        return response()->json($data);
    }
}
