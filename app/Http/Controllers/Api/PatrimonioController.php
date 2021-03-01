<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ListaPatrimoniosResource;
use App\Http\Resources\PatrimonioCollection;
use App\Http\Resources\PatrimonioResource;
use App\Models\Patrimonio\Patrimonio;
use Illuminate\Http\Request;

class PatrimonioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $patrimonios = Patrimonio::with(['fabricante:id,nome', 'aluguel.cliente:id,nome_fantasia', 'tipo_patrimonio:id,nome', 'estado_patrimonio:id,nome', 'modelo:id,nome'])->get();

        // $patrimonios->load('fabricante', 'aluguel', 'tipo_patrimonio', 'estado_patrimonio', 'modelo');


        return ListaPatrimoniosResource::collection($patrimonios);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Patrimonio  $patrimonio
     * @return \Illuminate\Http\Response
     */
    public function show(Patrimonio $patrimonio)
    {
        return new PatrimonioResource($patrimonio);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Patrimonio  $patrimonio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Patrimonio $patrimonio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Patrimonio  $patrimonio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patrimonio $patrimonio)
    {
        //
    }
}
