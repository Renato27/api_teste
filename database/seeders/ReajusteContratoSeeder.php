<?php

namespace Database\Seeders;

use App\Models\ReajusteContrato\ReajusteContrato;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReajusteContratoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reajuste_contrato = DB::connection('mysql2')->table('reajuste_contratos')->get();

        foreach($reajuste_contrato as $reajuste){
            ReajusteContrato::create([
                'data_inicio'   => $reajuste->data_inicio,
                'data_final'    => $reajuste->data_final,
                'atualizado'    => $reajuste->atualizado,
                'indice'        => $reajuste->indice,
                'contrato_id'   => $reajuste->contrato_id,
                'deleted_at'    => $reajuste->deleted_at
            ]);
        }
    }
}
