<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TipoLicenca\TipoLicenca;

class TipoLicencaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoLicenca::create([
            'nome' => 'Lógica',
        ]);
        TipoLicenca::create([
            'nome' => 'Cliente',
        ]);
    }
}
