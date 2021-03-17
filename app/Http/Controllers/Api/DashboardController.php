<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Http\Controllers\Api;

use App\Models\Chamado\Chamado;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Http\Controllers\Controller;
use App\Models\NotaEspelho\NotaEspelho;

class DashboardController extends Controller
{
    public function index()
    {
        $usuario = JWTAuth::parseToken()->authenticate();

        if ($usuario->tipo_usuario_id == 5) {
            $dados = [];

            $dados['Chamados'] = Chamado::whereHas('status_chamado', function ($query) {
                return $query->where('id', '<>', 5)->where('id', '<>', 6);
            })->with(['cliente:id,nome_fantasia', 'tipo_chamado:id,nome'])
            ->select('id', 'data_acao', 'mensagem', 'cliente_id', 'status_chamado_id', 'tipo_chamado_id')->get();

            $dados['Espelhos'] = NotaEspelho::whereHas('nota_espelho_estado', function ($query) {
                return $query->where('id', 1);
            })->get();

            return response()->json($dados);
        }
    }
}
