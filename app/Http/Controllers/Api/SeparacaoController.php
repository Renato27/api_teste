<?php

namespace App\Http\Controllers\Api;

use App\Events\EntregaPatrimonio;
use Illuminate\Http\Request;
use App\Models\Expedicao\Expedicao;
use App\Http\Controllers\Controller;
use App\Http\Resources\SeparacaoResource;
use App\Models\Entrega\Entrega;
use App\Models\Patrimonio\Patrimonio;

class SeparacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $expedicoes = Expedicao::where('expedicao_estado_id', 2)->paginate(5);
        return SeparacaoResource::collection($expedicoes);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $entrega = Entrega::where('expedicao_id', $request->expedicao)->first();

        $patrimonio = Patrimonio::where('numero_patrimonio', $request->patrimonio)->first();

        return event(new EntregaPatrimonio($entrega, $patrimonio->id, true));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $separacao = Expedicao::find($id);
        return new SeparacaoResource($separacao);
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
