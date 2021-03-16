<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TipoUsuario\TipoUsuario;

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
            'nome' => 'Suporte',
        ]);
        TipoUsuario::create([
            'nome' => 'Suporte Nível 2',
        ]);
        TipoUsuario::create([
            'nome' => 'Estoquista',
        ]);
        TipoUsuario::create([
            'nome' => 'Assistente',
        ]);
        TipoUsuario::create([
            'nome' => 'Gestão',
        ]);
        TipoUsuario::create([
            'nome' => 'Cliente',
        ]);
        TipoUsuario::create([
            'nome' => 'Financeiro',
        ]);
    }
}
