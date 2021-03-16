<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ClienteVisualizacaoPatrimonio\ClienteVisualizacaoPatrimonio;

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
            'nome' => 'Visualização dos Patrimônios do Grupo',
        ]);
        ClienteVisualizacaoPatrimonio::create([
            'nome' => 'Visualização dos Patrimônios do Cliente',
        ]);
        ClienteVisualizacaoPatrimonio::create([
            'nome' => 'Visualização dos Patrimônios do Endereço',
        ]);
    }
}
