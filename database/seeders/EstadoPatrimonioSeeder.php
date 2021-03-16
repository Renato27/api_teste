<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EstadoPatrimonio\EstadoPatrimonio;

class EstadoPatrimonioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EstadoPatrimonio::create([
            'nome' => 'Disponível',
        ]);
        EstadoPatrimonio::create([
            'nome' => 'Alugado',
        ]);
        EstadoPatrimonio::create([
            'nome' => 'Vendido',
        ]);
        EstadoPatrimonio::create([
            'nome' => 'Furtado',
        ]);
        EstadoPatrimonio::create([
            'nome' => 'Reparo',
        ]);
        EstadoPatrimonio::create([
            'nome' => 'Protesto',
        ]);
        EstadoPatrimonio::create([
            'nome' => 'Uso Interno',
        ]);
        EstadoPatrimonio::create([
            'nome' => 'Doado',
        ]);
        EstadoPatrimonio::create([
            'nome' => 'Marcado para Retirada',
        ]);
        EstadoPatrimonio::create([
            'nome' => 'Marcado para Entrega',
        ]);
    }
}
