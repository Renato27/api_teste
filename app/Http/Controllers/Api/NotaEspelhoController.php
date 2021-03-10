<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\NotaEspelhoResource;
use App\Models\NotaEspelho\NotaEspelho;
use App\Models\NotaEspelhoEstado\NotaEspelhoEstado;
use Illuminate\Http\Request;

class NotaEspelhoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $espelhos = NotaEspelho::where(['nota_espelho_estado_id' => NotaEspelhoEstado::PENDENTE, 'nota_espelho_estado_id' => NotaEspelhoEstado::AGUARDANDO_CHAMADO])->get();

        return NotaEspelhoResource::collection($espelhos);
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
}
