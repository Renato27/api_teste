<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Patrimonio\Patrimonio;
use App\Http\Resources\PatrimonioResource;
use App\Http\Resources\ListaPatrimoniosResource;
use App\Models\EstadoPatrimonio\EstadoPatrimonio;
use App\Models\PatrimonioAlugado\PatrimonioAlugado;
use Symfony\Component\HttpKernel\Exception\HttpException;
use App\Services\Patrimonio\CadastrarPatrimonio\Contracts\CadastrarPatrimonioService;

class PatrimonioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $patrimonios = Patrimonio::with(['fabricante:id,nome', 'aluguel.cliente:id,nome_fantasia', 'tipo_patrimonio:id,nome', 'estado_patrimonio:id,nome', 'modelo:id,nome'])->get();

        $patrimonios = Patrimonio::select('id', 'numero_patrimonio', 'numero_serie', 'modelo_id', 'tipo_patrimonio_id', 'fabricante_id', 'estado_patrimonio_id')
        ->with(['fabricante:id,nome', 'aluguel.cliente:id,nome_fantasia', 'tipo_patrimonio:id,nome', 'estado_patrimonio:id,nome', 'modelo:id,nome'])->get();

        // $patrimonios->load('fabricante', 'aluguel', 'tipo_patrimonio', 'estado_patrimonio', 'modelo');

        return ListaPatrimoniosResource::collection($patrimonios);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, CadastrarPatrimonioService $service)
    {
        try {
            $patrimonio = $service->setDados($request->all())->handle();

            return new PatrimonioResource($patrimonio);
        } catch (\Throwable $th) {
            throw new HttpException(400, $th->getMessage());
        }
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
        try {
            if ($patrimonio->estado_patrimonio_id == EstadoPatrimonio::Alugado) {
                $aluguel = PatrimonioAlugado::where('patrimonio_id', $patrimonio->id)->first();
                $aluguel->fill($request->all());
                $aluguel->save();

                $patrimonio->fill($request->all());
                $patrimonio->save();
            } else {
                $patrimonio->fill($request->all());
                $patrimonio->save();
            }

            return new PatrimonioResource($patrimonio);
        } catch (\Throwable $th) {
            throw new HttpException(400, $th->getMessage());
        }
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
