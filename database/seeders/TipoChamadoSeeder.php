<?php

namespace Database\Seeders;

use App\Models\TipoChamado\TipoChamado;
use Illuminate\Database\Seeder;

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
            'nome' => 'Entrega'
        ]);
        TipoChamado::create([
            'nome' => 'Retirada'
        ]);
        TipoChamado::create([
            'nome' => 'Preventiva'
        ]);
        TipoChamado::create([
            'nome' => 'Contador'
        ]);
        TipoChamado::create([
            'nome' => 'Corretiva'
        ]);
        TipoChamado::create([
            'nome' => 'Suprimento'
        ]);
        TipoChamado::create([
            'nome' => 'Suporte'
        ]);
        TipoChamado::create([
            'nome' => 'Troca'
        ]);
        TipoChamado::create([
            'nome' => 'Auditoria'
        ]);
    }
}
