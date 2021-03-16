<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\NotaEspelhoEstado\NotaEspelhoEstado;

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
            'nome' => 'Pendente',
        ]);
        NotaEspelhoEstado::create([
            'nome' => 'Processado',
        ]);
        NotaEspelhoEstado::create([
            'nome' => 'Cancelado',
        ]);
        NotaEspelhoEstado::create([
            'nome' => 'Aguardando Chamado',
        ]);
    }
}
