<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace Database\Seeders;

use Carbon\CarbonImmutable;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\LancamentoFuturo\LancamentoFuturo;

class LancamentoFuturoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lancamentos = DB::connection('mysql2')->table('cliente_nota_lembretes')->get();

        foreach ($lancamentos as $lancamento) {
            LancamentoFuturo::create([
                'mes_cobranca' => CarbonImmutable::today()->format('m'),
                'descricao' => $lancamento->descricao,
                'quantidade' => $lancamento->quantidade,
                'valor_unitario' => $lancamento->valor_unitario,
                'nota_espelho_id' => null,
                'contrato_id' => $lancamento->contrato_id,
                'nota_id' => $lancamento->nota_id,
            ]);
        }
    }
}
