<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\Clientes\Cliente;
use App\Models\Endereco\Endereco;
use App\Http\Controllers\Controller;
use App\Http\Resources\EnderecoResource;
use App\Repositories\Contracts\EnderecoRepository;
use App\Services\Enderecos\ExcluirEndereco\Contracts\ExcluirEnderecoService;
use App\Services\Enderecos\AtualizarEndereco\Contracts\AtualizarEnderecoService;
use App\Services\Enderecos\CadastrarEndereco\Contracts\CadastrarEnderecoService;

class EnderecoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(EnderecoRepository $enderecoRepository)
    {
        $endereco = $enderecoRepository->getEnderecos();

        return EnderecoResource::collection($endereco);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Cliente $cliente, CadastrarEnderecoService $service)
    {
        try {
            $endereco = $service->setDados($request->all())->handle();
            $cliente->enderecos()->attach($endereco->id);

            return new EnderecoResource($endereco);
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
    public function show(Endereco $endereco)
    {
        return new EnderecoResource($endereco);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Endereco $endereco, AtualizarEnderecoService $service)
    {
        try {
            $service->setEndereco($endereco->id);
            $enderecoAtualizado = $service->setDados($request->all())->handle();

            return new EnderecoResource($enderecoAtualizado);
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
    public function destroy(Cliente $cliente, Endereco $endereco, ExcluirEnderecoService $service)
    {
        try {
            $cliente->enderecos()->detach($endereco->id);
            $service->setEndereco($endereco->id);
            $service->handle();

            return response()->json([], 200);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
