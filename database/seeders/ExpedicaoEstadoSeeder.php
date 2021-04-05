<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ExpedicaoEstado\ExpedicaoEstado;

class ExpedicaoEstadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ExpedicaoEstado::create([
            'nome' => 'Aguardando Seleção',
        ]);
        ExpedicaoEstado::create([
            'nome' => 'Aguardando Separação',
        ]);
        ExpedicaoEstado::create([
            'nome' => 'Aguardando Preparação',
        ]);
        ExpedicaoEstado::create([
            'nome' => 'Liberado',
        ]);
        ExpedicaoEstado::create([
            'nome' => 'Aguardando Reversa',
        ]);
        ExpedicaoEstado::create([
            'nome' => 'Reversa Concluída',
        ]);
        ExpedicaoEstado::create([
            'nome' => 'Cancelada',
        ]);
    }
}
