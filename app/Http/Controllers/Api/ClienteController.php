<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Http\Controllers\Api;

use App\Events\ClienteEvent;
use Illuminate\Http\Request;
use App\Models\Clientes\Cliente;
use App\Http\Controllers\Controller;
use App\Http\Resources\ClienteResource;
use App\Http\Resources\ClienteContatoEnderecoResource;
use Symfony\Component\HttpKernel\Exception\HttpException;
use App\Services\Clientes\ExcluirCliente\Contracts\ExcluirClienteService;
use App\Services\Clientes\AtualizarCliente\Contracts\AtualizarClienteService;
use App\Services\Clientes\CadastrarCliente\Contracts\CadastrarClienteService;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $clientes = Cliente::get();

        return ClienteResource::collection($clientes);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, CadastrarClienteService $serviceCliente)
    {
        try {
            $cliente = $serviceCliente->setDados($request->cliente)->handle();

            event(new ClienteEvent($cliente, $request->endereco, $request->contato));

            return new ClienteResource($cliente);
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
    public function show(Cliente $cliente)
    {
        return new ClienteContatoEnderecoResource($cliente);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Cliente $cliente, Request $request, AtualizarClienteService $serviceCliente)
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
