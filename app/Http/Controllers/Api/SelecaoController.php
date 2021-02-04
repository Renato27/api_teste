<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\Expedicao\Expedicao;
use App\Http\Controllers\Controller;
use App\Http\Resources\SelecaoResource;
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
        $expedicoes = Expedicao::where('expedicao_estado_id', 1)->paginate(5);

        return SelecaoResource::collection($expedicoes);
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
            $service->setExpedicao($expedicao->id);
            $service->setPatrimonios($request->patrimonios)->handle();


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
    public function show(Expedicao $expedicao)
    {
        return new SelecaoResource($expedicao);
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
