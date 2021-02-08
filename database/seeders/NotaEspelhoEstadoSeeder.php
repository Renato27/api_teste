<?php

namespace Database\Seeders;

use App\Models\NotaEspelhoEstado\NotaEspelhoEstado;
use Illuminate\Database\Seeder;

class NotaEspelhoEstadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        NotaEspelhoEstado::create([
            'nome' => 'Pendente'
        ]);
        NotaEspelhoEstado::create([
            'nome' => 'Processado'
        ]);
        NotaEspelhoEstado::create([
            'nome' => 'Cancelado'
        ]);
        NotaEspelhoEstado::create([
            'nome' => 'Aguardando Chamado'
        ]);
    }
}
