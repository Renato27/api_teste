<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\Expedicao\Expedicao;
use App\Http\Controllers\Controller;
use App\Http\Resources\ListaExpedicaoSelecaoResource;
use App\Http\Resources\SelecaoResource;
use App\Http\Resources\SeparacaoResource;
use App\Services\Entrega\CadastrarEntrega\Contracts\CadastrarEntregaService;

class SelecaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $expedicoes = Expedicao::with(['pedido:id,data_entrega', 'pedido.contrato.cliente:cliente_id,nome_fantasia'])->where('expedicao_estado_id', 1)->get();

        return ListaExpedicaoSelecaoResource::collection($expedicoes);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Expedicao $expedicao, CadastrarEntregaService $service)
    {
        try {
            $expedicao = Expedicao::find($request->expedicao);

            $service->setExpedicao($expedicao);
            $service->setItemPedido($request->item_id);
            $service->setPatrimonios($request->patrimonios)->handle();

            return new SeparacaoResource($expedicao);
        } catch (\Throwable $th) {
            dd($th->getMessage());
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
        $selecao = Expedicao::find($id);

        return new SelecaoResource($selecao);
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
}
