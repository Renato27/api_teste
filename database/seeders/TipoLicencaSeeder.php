<?php

namespace Database\Seeders;

use App\Models\TipoLicenca\TipoLicenca;
use Illuminate\Database\Seeder;

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
            'nome' => 'Lógica'
        ]);
        TipoLicenca::create([
            'nome' => 'Cliente'
        ]);
    }
}
