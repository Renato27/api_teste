<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ClienteRequest;
use App\Http\Resources\ClienteResource;
use App\Models\Clientes\Cliente;
use App\Repositories\Contracts\ClienteRepository;
use App\Services\Clientes\AtualizarCliente\Contracts\AtualizarClienteService;
use App\Services\Clientes\CadastrarCliente\Contracts\CadastrarClienteService;
use App\Services\Clientes\ExcluirCliente\Contracts\ExcluirClienteService;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ClienteRepository $clienteRepository)
    {
        $cliente = $clienteRepository->getclientes();
        return ClienteResource::collection($cliente);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClienteRequest $clienteRequest, CadastrarClienteService $serviceCliente)
    {
        try {

            $cliente = $serviceCliente->setDados($clienteRequest->all())->handle();

            return new ClienteResource($cliente);
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
    public function show(Cliente $cliente)
    {
        return new ClienteResource($cliente);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Cliente $cliente, Request $request,  AtualizarClienteService $serviceCliente)
    {
        try {
            $serviceCliente->setCliente($cliente->id);
            $clienteAtualizado = $serviceCliente->setDados($request->all())->handle();
            
            return new ClienteResource($clienteAtualizado);
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
    public function destroy(Cliente $cliente, ExcluirClienteService $service)
    {
        try {
            $service->setCliente($cliente->id);
            $service->handle();

            return response()->json([], 200);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
