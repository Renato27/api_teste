<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MedicaoTipo\MedicaoTipo;

class MedicaoTipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MedicaoTipo::create([
            'nome' => 'Sem Medição',
        ]);
        MedicaoTipo::create([
            'nome' => 'Vencida',
        ]);
        MedicaoTipo::create([
            'nome' => 'A Vencer',
        ]);
    }
}
