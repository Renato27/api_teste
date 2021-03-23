<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contratos\Contrato;
use Illuminate\Support\Facades\DB;
use App\Models\ClienteContrato\ClienteContrato;
use App\Models\ContatoContrato\ContatoContrato;
use App\Models\PagamentoMetodo\PagamentoMetodo;

class ContratoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $metodosPagamentos = DB::connection('mysql2')->table('metodo_pagamentos')->get();

        foreach ($metodosPagamentos as $metodoPagamento) {
            PagamentoMetodo::create([
                'id' => $metodoPagamento->id,
                'nome' => $metodoPagamento->nome,
                'detalhes' => $metodoPagamento->detalhes,
            ]);
        }

        $contratos = DB::connection('mysql2')->table('contratos')->get();

        foreach ($contratos as $contrato) {
            Contrato::create([
                'id' => $contrato->id,
                'nome' => $contrato->nome,
                'inicio' => $contrato->inicio,
                'fim' => $contrato->fim,
                'medicao_tipo_id' => $contrato->medicao_tipo_id,
                'pagamento_metodo_id' => $contrato->metodo_pagamento_id,
                'contrato_tipo_id' => $contrato->tipo_contrato_id,
                'detalhes' => $contrato->detalhes,
                'detalhes_nota' => $contrato->informacoes_complementares,
                'dia_emissao_nota' => $contrato->dia_emissao_nota,
                'dia_vencimento_nota' => $contrato->dia_vencimento_nota,
                'dia_periodo_inicio_nota' => $contrato->dia_periodo_inicio,
                'dia_periodo_fim_nota' => $contrato->dia_periodo_fim,
                'responsavel' => $contrato->responsavel,
                'tipo_inflacao' => $contrato->inflacao_detalhes,
            ]);

            ClienteContrato::create([
                'cliente_id' => $contrato->cliente_id,
                'contrato_id' => $contrato->id,
            ]);

            if (! is_null($contrato->contato_id)) {
                ContatoContrato::create([
                    'contato_id' => $contrato->contato_id,
                    'contrato_id' => $contrato->id,
                ]);
            }
        }
    }
}
