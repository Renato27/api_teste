<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContratoRequest;
use App\Http\Resources\ContratoResource;
use App\Models\Clientes\Cliente;
use App\Models\Contratos\Contrato;
use App\Repositories\Contracts\ContratosRepository;
use App\Services\Contratos\AtualizarContrato\Contracts\AtualizarContratoService;
use App\Services\Contratos\CadastrarContrato\Contracts\CadastrarContratoService;
use App\Services\Contratos\ExcluirContrato\Contracts\ExcluirContratoService;
use Illuminate\Http\Request;

class ContratoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contratos = Contrato::paginate(25);

        return ContratoResource::collection($contratos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContratoRequest $request, Cliente $cliente, CadastrarContratoService $service)
    {


        try {
            $contrato = $service->setDados($request->all())->handle();
            $cliente->contratos()->attach($contrato->id);

            return new ContratoResource($contrato);
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
    public function show(Contrato $contrato)
    {
        return new ContratoResource($contrato);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ContratoRequest $request, Contrato $contrato, AtualizarContratoService $service)
    {
        try {
            $contrato = $service->setDados($request->all())->setContrato($contrato->id)->handle();

            return new ContratoResource($contrato);
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
    public function destroy(Cliente $cliente, Contrato $contrato, ExcluirContratoService $service)
    {
        try{

            $cliente->contratos()->detach($contrato->id);
            $service->setContrato($contrato->id);
            $service->handle();

            return response()->json([], 200);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
