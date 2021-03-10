<?php

namespace App\Http\Controllers\Api;

use App\Events\UsuarioClienteEvent;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Http\Controllers\Controller;
use App\Http\Requests\UsuarioRequest;
use App\Http\Resources\UsuarioResource;
use App\Models\Usuario\Usuario;
use App\Models\UsuarioCliente\UsuarioCliente;
use App\Repositories\Contracts\UsuarioRepository;
use App\Services\Usuario\CadastrarUsuario\Contracts\CadastrarUsuarioService;
use Exception;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Tymon\JWTAuth\Exceptions\JWTException;

use function PHPUnit\Framework\throwException;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsuarioRequest $request, CadastrarUsuarioService $service)
    {
        try {
            $usuario = $service->setDados($request->all())->handle();
            foreach($request->clientesIds as $clienteId){
                event(new UsuarioClienteEvent($usuario, $clienteId));
            }

            return new UsuarioResource($usuario);
        } catch (\Throwable $th) {
            throw new HttpException(400, $th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    // public function register(Request $request, UsuarioRepository $usuarioRepository) : JsonResponse
    // {
    //     $usuario = $usuarioRepository->createUsuario($request->all());

    //     $this->data = [
    //         'status' => true,
    //         'code'   => 200,
    //         'data'   => [
    //             'User' => $usuario
    //         ],
    //         'err'    => null
    //     ];

    //     return response()->json($this->data, $this->data['code']);

    // }
}
