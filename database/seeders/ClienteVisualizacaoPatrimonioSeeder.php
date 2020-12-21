<?php

namespace Database\Seeders;

use App\Models\ClienteVisualizacaoPatrimonio\ClienteVisualizacaoPatrimonio;
use Illuminate\Database\Seeder;

class ClienteVisualizacaoPatrimonioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ClienteVisualizacaoPatrimonio::create([
            'nome' => 'Visualização dos Patrimônios do Grupo'
        ]);
        ClienteVisualizacaoPatrimonio::create([
            'nome' => 'Visualização dos Patrimônios do Cliente'
        ]);
        ClienteVisualizacaoPatrimonio::create([
            'nome' => 'Visualização dos Patrimônios do Endereço'
        ]);
    }
}
