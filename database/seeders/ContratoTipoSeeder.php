<?php

namespace Database\Seeders;

use App\Models\ContratoTipo\ContratoTipo;
use Illuminate\Database\Seeder;

class ContratoTipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ContratoTipo::create([
            'nome' => 'Locação'
        ]);
        ContratoTipo::create([
            'nome' => 'Suporte'
        ]);
        ContratoTipo::create([
            'nome' => 'Valor Fixo'
        ]);
    }
}
