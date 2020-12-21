<?php

namespace Database\Seeders;

use App\Models\StatusPedido\StatusPedido;
use Illuminate\Database\Seeder;

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
            'nome' => 'Aguardando Expedição'
        ]);
        StatusPedido::create([
            'nome' => 'Aguardando Entrega'
        ]);
        StatusPedido::create([
            'nome' => 'Entregue'
        ]);
        StatusPedido::create([
            'nome' => 'Cancelado'
        ]);
    }
}
