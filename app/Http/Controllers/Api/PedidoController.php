<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Http\Controllers\Api;

use App\Events\PedidoItem;
use Illuminate\Http\Request;
use App\Models\Pedido\Pedido;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Resources\PedidoResource;
use App\Http\Resources\ListaPedidosResource;
use App\Services\Pedidos\ExcluirPedido\Contracts\ExcluirPedidoService;
use App\Services\Pedidos\AtualizarPedido\Contracts\AtualizarPedidoService;
use App\Services\Pedidos\CadastrarPedido\Contracts\CadastrarPedidoService;
use App\Services\ItemPedido\CadastrarItemPedido\Contracts\CadastrarItemPedidoService;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pedidos = Pedido::with(['endereco.cliente:cliente_id,nome_fantasia,cpf_cnpj', 'endereco:id,bairro', 'contato:id,nome', 'status:id,nome'])
        ->with('itens', function ($query) {
            $query->select(DB::raw('sum(valor) as valor'))->groupBy('pedido_id');
        })->select('id', 'data_entrega', 'status_pedido_id', 'endereco_id', 'contato_id')->get();

        return ListaPedidosResource::collection($pedidos);
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
            event(new PedidoItem($pedido, null, $request->contrato_id));

            foreach ($request->itens as $item) {
                $item = $serviceItem->setDados($item)->handle();

                event(new PedidoItem($pedido, $item, null));
            }

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
