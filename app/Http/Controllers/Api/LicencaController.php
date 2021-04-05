<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\Licenca\Licenca;
use App\Http\Controllers\Controller;
use App\Http\Resources\LicencaResource;
use App\Models\LicencaPatrimonio\LicencaPatrimonio;
use Symfony\Component\HttpKernel\Exception\HttpException;

class LicencaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $licencas = Licenca::get();

        return LicencaResource::collection($licencas);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $licenca = Licenca::create($request->all());

            return new LicencaResource($licenca);
        } catch (\Throwable $th) {
            throw new HttpException(400, $th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Licenca\Licenca  $licenca
     * @return \Illuminate\Http\Response
     */
    public function show(Licenca $licenca)
    {
        return new LicencaResource($licenca);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Licenca\Licenca  $licenca
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Licenca $licenca)
    {
        $licenca_patrimonio = LicencaPatrimonio::where(['patrimonio_id' => $request->patrimonio, 'licenca_id' => $licenca->id])->first();

        if (isset($licenca_patrimonio->id)) {
            $licenca_patrimonio->delete();
        } else {
            LicencaPatrimonio::create([
                'host_name' => $request->host_name,
                'licenca_id' => $licenca->id,
                'patrimonio_id' => $request->patrimonio_id,
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Licenca\Licenca  $licenca
     * @return \Illuminate\Http\Response
     */
    public function destroy(Licenca $licenca)
    {
        $licenca->delete();

        return response()->json([], 200);
    }
}
