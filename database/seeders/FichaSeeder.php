<?php

namespace Database\Seeders;

use App\Models\Ficha\Ficha;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FichaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fichas = DB::connection('mysql2')->table('fichas')->get();

        foreach($fichas as $ficha){
            Ficha::create([
                'detalhes' => $ficha->nota,
                'funcionario_id'  => $ficha->funcionarios_idfuncionarios,
                'patrimonio_id' => $ficha->patrimonios_idpatrimonios,
                'chamado_id' => $ficha->chamado_id
            ]);
        }
    }
}
