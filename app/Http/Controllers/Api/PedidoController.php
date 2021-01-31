<?php

namespace App\Http\Controllers\Api;

use App\Events\PedidoItem;
use App\Http\Controllers\Controller;
use App\Http\Resources\PedidoResource;
use App\Models\Pedido\Pedido;
use App\Repositories\Contracts\PedidoRepository;
use App\Services\ItemPedido\CadastrarItemPedido\Contracts\CadastrarItemPedidoService;
use App\Services\Pedidos\AtualizarPedido\Contracts\AtualizarPedidoService;
use App\Services\Pedidos\CadastrarPedido\Contracts\CadastrarPedidoService;
use App\Services\Pedidos\ExcluirPedido\Contracts\ExcluirPedidoService;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pedidos = Pedido::paginate(25);

        return PedidoResource::collection($pedidos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, CadastrarPedidoService $service, CadastrarItemPedidoService $serviceItem)
    {
        try {
            $pedido = $service->setDados($request->all())->handle();
            $item = $serviceItem->setDados($request->all())->handle();

            event(new PedidoItem($pedido, $item, $request->contrato_id));

            return new PedidoResource($pedido);
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
    public function show(Pedido $pedido)
    {
        return new PedidoResource($pedido);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pedido $pedido, AtualizarPedidoService $service)
    {
        try {
            $pedido = $service->setDados($request->all())->setPedido($pedido->id)->handle();
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
    public function destroy(Pedido $pedido, ExcluirPedidoService $service)
    {
        try {
            $service->setPedido($pedido->id);
            $service->handle();

            return response()->json([], 200);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
