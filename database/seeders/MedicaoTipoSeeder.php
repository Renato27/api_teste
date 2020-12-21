<?php

namespace Database\Seeders;

use App\Models\MedicaoTipo\MedicaoTipo;
use Illuminate\Database\Seeder;

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
            'nome' => 'Sem Medição'
        ]);
        MedicaoTipo::create([
            'nome' => 'Vencida'
        ]);
        MedicaoTipo::create([
            'nome' => 'A Vencer'
        ]);
    }
}
