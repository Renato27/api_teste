<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ContatoResource;
use App\Models\Contato\Contato;
use App\Repositories\Contracts\ContatoRepository;
use App\Services\Contatos\AtualizarContato\Contracts\AtualizarContatoService;
use App\Services\Contatos\CadastrarContato\Contracts\CadastrarContatoService;
use App\Services\Contatos\ExcluirContato\Contracts\ExcluirContatoService;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ContatoRepository $contatoRepository)
    {
        $contatos = $contatoRepository->getContatos();

        return ContatoResource::collection($contatos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, CadastrarContatoService $service)
    {
        try {
            $contato = $service->setDados($request->all())->handle();

            return new ContatoResource($contato);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Contato $contato)
    {
        return new ContatoResource($contato);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contato $contato, AtualizarContatoService $service)
    {
        try {
            $contato = $service->setDados($request->all())->setContato($contato->id)->handle();

            return new ContatoResource($contato);
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
    public function destroy(Contato $contato, ExcluirContatoService $service)
    {
        try {
            $service->setContato($contato->id);
            $service->handle();

            return response()->json([], 200);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
