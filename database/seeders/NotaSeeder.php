<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Nota\Nota;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\NotaEstado\NotaEstado;
use App\Models\NotaPatrimonio\NotaPatrimonio;

class NotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $notaEstados = DB::connection('mysql2')->table('nota_estados')->get();

        foreach ($notaEstados as $notaEstado) {
            NotaEstado::create([
                'id' => $notaEstado->id,
                'nome' => $notaEstado->nome,
            ]);
        }

        $notas = DB::connection('mysql2')->table('notas')->get();

        foreach ($notas as $nota) {
            Nota::create([
                'id' => $nota->id,
                'data_emissao' => $nota->data_emissao,
                'data_vencimento' => $nota->data_vencimento,
                'data_pagamento' => $nota->data_pagamento,
                'periodo_inicio' => $nota->periodo_inicio,
                'periodo_fim' => $nota->periodo_fim,
                'descricao' => $nota->descricao,
                'valor' => $nota->valor,
                'antecipacao' => $nota->antecipacao,
                'tem_boleto' => $nota->tem_boleto,
                'nota_estado_id' => $nota->nota_estado_id,
                'cliente_id' => $nota->cliente_id,
                'contrato_id' => $nota->contrato_id,
                'created_at' => $nota->created_at,
            ]);
        }

        $notaPatrimonios = DB::connection('mysql2')->table('nota_patrimonios')->get();

        foreach ($notaPatrimonios as $notaPatrimonio) {
            NotaPatrimonio::create([
                'id' => $notaPatrimonio->id,
                'periodo_inicio' => $notaPatrimonio->periodo_inicio,
                'periodo_fim' => $notaPatrimonio->periodo_fim,
                'valor' => $notaPatrimonio->valor,
                'patrimonio_id' => $notaPatrimonio->patrimonio_id,
                'nota_id' => $notaPatrimonio->nota_id,
                'contrato_id' => $notaPatrimonio->contrato_id,
                'chamado_id' => $notaPatrimonio->chamado_id,
                'created_at' => $notaPatrimonio->created_at,
                'deleted_at' => $notaPatrimonio->devolvido == 1 ? Carbon::now() : null,
            ]);
        }
    }
}
