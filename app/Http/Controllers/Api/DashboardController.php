<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Http\Controllers\Api;

use App\Models\Chamado\Chamado;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Http\Controllers\Controller;
use App\Models\Cobranca\Cobranca;
use App\Models\Nota\Nota;
use App\Models\NotaEspelho\NotaEspelho;
use App\Repositories\Contracts\ContratosRepository;

class DashboardController extends Controller
{
    public function index(ContratosRepository $contratosRepository)
    {
        $usuario = JWTAuth::parseToken()->authenticate();

        if ($usuario->tipo_usuario_id == 5) {
            $dados = [];

            $dados['Chamados'] = Chamado::whereHas('status_chamado', function ($query) {
                return $query->where('id', '<>', 5)->where('id', '<>', 6);
            })->with(['cliente:id,nome_fantasia', 'tipo_chamado:id,nome'])
            ->select('id', 'data_acao', 'mensagem', 'cliente_id', 'status_chamado_id', 'tipo_chamado_id', 'created_at')->get();

            $dados['Espelhos'] = NotaEspelho::whereHas('nota_espelho_estado', function ($query) {
                return $query->whereIn('id', [1, 5]);
            })->get();

            $dados['Notas'] = Nota::with(['cliente:id,nome_fantasia', 'nota_estado:id,nome', 'contrato:id,nome'])
                ->select('id', 'data_emissao', 'data_vencimento', 'data_pagamento', 'periodo_inicio', 'periodo_fim','valor',
                 'nota_estado_id', 'cliente_id', 'contrato_id')->get();

            $dados['Cobrancas'] = Cobranca::whereHas('atividades', function($query){
                return $query->count();
            })->whereHas('notas', function($query2){
                return $query2->select('id');
            })->with(['cliente:id,nome_fantasia', 'nota:id'])
            ->get();


            $dados['Contratos'] = $contratosRepository->getContratosAVencer();

            return response()->json($dados);
        }
    }
}
