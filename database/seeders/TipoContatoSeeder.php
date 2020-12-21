<?php

namespace Database\Seeders;

use App\Models\TipoContato\TipoContato;
use Illuminate\Database\Seeder;

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
            'nome' => 'Financeiro'
        ]);
        TipoContato::create([
            'nome' => 'Responsável Legal'
        ]);
        TipoContato::create([
            'nome' => 'Usuário do Sistema'
        ]);
        TipoContato::create([
            'nome' => 'Outro'
        ]);
    }
}
