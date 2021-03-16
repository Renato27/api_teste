<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TipoContato\TipoContato;

class TipoContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoContato::create([
            'nome' => 'Financeiro',
        ]);
        TipoContato::create([
            'nome' => 'Responsável Legal',
        ]);
        TipoContato::create([
            'nome' => 'Usuário do Sistema',
        ]);
        TipoContato::create([
            'nome' => 'Outro',
        ]);
    }
}
