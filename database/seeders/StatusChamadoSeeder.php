<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\StatusChamado\StatusChamado;

class StatusChamadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StatusChamado::create([
            'nome' => 'Aberto',
        ]);
        StatusChamado::create([
            'nome' => 'Fechado',
        ]);
        StatusChamado::create([
            'nome' => 'Excluir',
        ]);
        StatusChamado::create([
            'nome' => 'Excluir2',
        ]);
        StatusChamado::create([
            'nome' => 'Encerrado',
        ]);
        StatusChamado::create([
            'nome' => 'Cancelado',
        ]);
        StatusChamado::create([
            'nome' => 'Em Andamento',
        ]);
    }
}
