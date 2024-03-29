<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\Chamado\Chamado;
use App\Http\Controllers\Controller;
use App\Http\Resources\ChamadoResource;
use App\Services\Chamado\GerarChamado\Contracts\GerarChamadoService;
use App\Services\Chamado\AtualizarChamado\Contracts\AtualizarChamadoService;

class ChamadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chamados = Chamado::get();

        //Criar LIsta de chamados para processamento mais rápido.
        return ChamadoResource::collection($chamados);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, GerarChamadoService $gerarChamadoService)
    {
        try {
            $gerarChamadoService->setDados($request->all());
            $gerarChamadoService->setPatrimoniosTrocar($request->patrimonios_trocar);
            $chamado = $gerarChamadoService->setPatrimonios($request->patrimonios)->handle();

            return new ChamadoResource($chamado);
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
    public function show(Chamado $chamado)
    {
        return new ChamadoResource($chamado);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Chamado $chamado, AtualizarChamadoService $atualizarChamadoService)
    {
        $atualizarChamadoService->setChamado($chamado);
        $chamado = $atualizarChamadoService->setDados($request->all())->handle();

        return new ChamadoResource($chamado);
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
