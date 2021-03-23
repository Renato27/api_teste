<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Http\Controllers\Api;

use App\Models\Nota\Nota;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\NotaResource;
use App\Http\Resources\ListaNotasFatura;
use Symfony\Component\HttpKernel\Exception\HttpException;
use App\Services\Nota\GerarNota\Contracts\GerarNotaService;

class NotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notas = Nota::with(['cliente:id,nome_fantasia', 'nota_estado:id,nome', 'contrato:id,nome'])->get();

        return ListaNotasFatura::collection($notas);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, GerarNotaService $service)
    {
        try {
            $nota = $service->setDados($request->all())->handle();

            return response()->json($nota->id);
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
    public function show(Nota $nota)
    {
        return new NotaResource($nota);
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
