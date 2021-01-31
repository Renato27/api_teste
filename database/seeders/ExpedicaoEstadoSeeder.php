<?php

namespace Database\Seeders;

use App\Models\ExpedicaoEstado\ExpedicaoEstado;
use Illuminate\Database\Seeder;

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
            'nome' => 'Aguardando Seleção'
        ]);
        ExpedicaoEstado::create([
            'nome' => 'Aguardando Separação'
        ]);
        ExpedicaoEstado::create([
            'nome' => 'Aguardando Preparação'
        ]);
        ExpedicaoEstado::create([
            'nome' => 'Liberado'
        ]);
        ExpedicaoEstado::create([
            'nome' => 'Aguardando Reversa'
        ]);
        ExpedicaoEstado::create([
            'nome' => 'Reversa Concluída'
        ]);
        ExpedicaoEstado::create([
            'nome' => 'Cancelada'
        ]);
    }
}
