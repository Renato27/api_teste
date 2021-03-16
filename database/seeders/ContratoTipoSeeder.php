<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ContratoTipo\ContratoTipo;

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
            'nome' => 'Locação',
        ]);
        ContratoTipo::create([
            'nome' => 'Suporte',
        ]);
        ContratoTipo::create([
            'nome' => 'Valor Fixo',
        ]);
    }
}
