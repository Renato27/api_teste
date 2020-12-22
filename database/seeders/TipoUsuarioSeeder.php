<?php

namespace Database\Seeders;

use App\Models\TipoUsuario\TipoUsuario;
use Illuminate\Database\Seeder;

class TipoUsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoUsuario::create([
            'nome' => 'Suporte'
        ]);
        TipoUsuario::create([
            'nome' => 'Suporte Nível 2'
        ]);
        TipoUsuario::create([
            'nome' => 'Estoquista'
        ]);
        TipoUsuario::create([
            'nome' => 'Assistente'
        ]);
        TipoUsuario::create([
            'nome' => 'Gestão'
        ]);
        TipoUsuario::create([
            'nome' => 'Cliente'
        ]);
        TipoUsuario::create([
            'nome' => 'Financeiro'
        ]);
    }
}
