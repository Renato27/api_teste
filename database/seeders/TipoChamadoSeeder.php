<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TipoChamado\TipoChamado;

class TipoChamadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoChamado::create([
            'nome' => 'Entrega',
        ]);
        TipoChamado::create([
            'nome' => 'Retirada',
        ]);
        TipoChamado::create([
            'nome' => 'Preventiva',
        ]);
        TipoChamado::create([
            'nome' => 'Contador',
        ]);
        TipoChamado::create([
            'nome' => 'Corretiva',
        ]);
        TipoChamado::create([
            'nome' => 'Suprimento',
        ]);
        TipoChamado::create([
            'nome' => 'Suporte',
        ]);
        TipoChamado::create([
            'nome' => 'Troca',
        ]);
        TipoChamado::create([
            'nome' => 'Auditoria',
        ]);
    }
}
