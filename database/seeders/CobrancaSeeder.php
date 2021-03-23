<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cobranca\Cobranca;
use Illuminate\Support\Facades\DB;
use App\Models\CobrancaNota\CobrancaNota;
use App\Models\CobrancaEstado\CobrancaEstado;
use App\Models\CobrancaAtividade\CobrancaAtividade;

class CobrancaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cobrancaEstados = DB::connection('mysql2')->table('cliente_cobranca_estados')->get();

        foreach ($cobrancaEstados as $estado) {
            CobrancaEstado::create([
                'id' => $estado->id,
                'nome' => $estado->nome,
            ]);
        }

        $cobrancas = DB::connection('mysql2')->table('cliente_cobrancas')->get();

        foreach ($cobrancas as $cobranca) {
            Cobranca::create([
                'id' => $cobranca->id,
                'descricao' => $cobranca->descricao,
                'usuario_id' => $cobranca->usuario_id,
                'cliente_id' => $cobranca->cliente_id,
                'cobranca_estado_id' => $cobranca->cliente_cobranca_estado_id,
                'created_at' => $cobranca->created_at,
            ]);
        }

        $cobranca_atividades = DB::connection('mysql2')->table('cliente_cobranca_atividades')->get();

        foreach ($cobranca_atividades as $atividade) {
            CobrancaAtividade::create([
                'id' => $atividade->id,
                'data_contato' => $atividade->contato_em,
                'responsavel' => $atividade->responsavel,
                'detalhes' => $atividade->detalhes,
                'cobranca_id' => $atividade->cliente_cobranca_id,
                'usuario_id' => $atividade->usuario_id,
                'created_at' => $atividade->created_at,
            ]);
        }

        $cobranca_notas = DB::connection('mysql2')->table('cliente_cobranca_notas')->get();

        foreach ($cobranca_notas as $cNota) {
            CobrancaNota::create([
                'cobranca_id' => $cNota->cliente_cobranca_id,
                'nota_id' => $cNota->nota_id,
            ]);
        }
    }
}
