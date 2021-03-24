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
use App\Models\ClienteContato\ClienteContato;
use App\Models\ClienteEndereco\ClienteEndereco;
use App\Models\Endereco\Endereco;
use Symfony\Component\HttpKernel\Exception\HttpException;
use App\Services\Nota\GerarNota\Contracts\GerarNotaService;

use function PHPUnit\Framework\isEmpty;

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
        $array = collect();
        $array->add($nota);

        $endereco = ClienteEndereco::where('cliente_id', $nota->cliente_id)
        ->whereHas('endereco', function($query) {
            $query->where('principal', 1);
        })->with('endereco:id,rua,numero,bairro,cep,cidade,estado')->get();

        $contato = ClienteContato::where('cliente_id', $nota->cliente_id)
        ->whereHas('contato', function($query2) {
            $query2->where('principal', 1);
        })->with('contato:id,telefone,celular')->first();

        if(isEmpty($contato)){
            $contato = ClienteContato::where('cliente_id', $nota->cliente_id)
            ->whereHas('contato', function($query2) {
                $query2->whereNotNull('telefone');
            })->with('contato:id,telefone,celular')->first();
        }

        $array->add($endereco);
        $array->add($contato);
        // $a = Nota::where('cliente', function($query) {
        //     $query->where('enderecos', function($query2) {
        //         $query2->where('principal', 1);
        //     })->get();
        // })->get();
        return new NotaResource($array);
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
