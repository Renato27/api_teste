<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\FuncionarioResource;
use App\Models\Funcionario\Funcionario;
use App\Repositories\Contracts\FuncionarioRepository;
use App\Services\Funcionarios\AtualizarFuncionario\Contracts\AtualizarFuncionarioService;
use App\Services\Funcionarios\CadastrarFuncionario\Contracts\CadastrarFuncionarioService;
use App\Services\Funcionarios\ExcluirFuncionario\Contracts\ExcluirFuncionarioService;
use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(FuncionarioRepository $funcionarioRepository)
    {
        $funcionario = $funcionarioRepository->getFuncionarios();

        return FuncionarioResource::collection($funcionario);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, CadastrarFuncionarioService $service)
    {
        try {
            $funcionario = $service->setDados($request->all())->handle();

            return new FuncionarioResource($funcionario);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Funcionario $funcionario)
    {
        return new FuncionarioResource($funcionario);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Funcionario $funcionario, AtualizarFuncionarioService $service)
    {
        try {
            $funcionario = $service->setDados($request->all())->setFuncionario($funcionario->id)->handle();

            return new FuncionarioResource($funcionario);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Funcionario $funcionario, ExcluirFuncionarioService $service)
    {
        try {
            $service->setFuncionario($funcionario->id);
            $service->handle();

            return response()->json([], 200);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
