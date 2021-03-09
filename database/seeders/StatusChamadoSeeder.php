<?php

namespace Database\Seeders;

use App\Models\StatusChamado\StatusChamado;
use Illuminate\Database\Seeder;

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
            'nome' => 'Aberto'
        ]);
        StatusChamado::create([
            'nome' => 'Fechado'
        ]);
        StatusChamado::create([
            'nome' => 'Excluir'
        ]);
        StatusChamado::create([
            'nome' => 'Excluir2'
        ]);
        StatusChamado::create([
            'nome' => 'Encerrado'
        ]);
        StatusChamado::create([
            'nome' => 'Cancelado'
        ]);
        StatusChamado::create([
            'nome' => 'Em Andamento'
        ]);
    }
}
