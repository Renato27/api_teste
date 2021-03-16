<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\StatusPedido\StatusPedido;

class StatusPedidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StatusPedido::create([
            'nome' => 'Aguardando Expedição',
        ]);
        StatusPedido::create([
            'nome' => 'Aguardando Entrega',
        ]);
        StatusPedido::create([
            'nome' => 'Entregue',
        ]);
        StatusPedido::create([
            'nome' => 'Cancelado',
        ]);
    }
}
