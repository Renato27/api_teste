<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace Database\Factories\PedidoStatusPedido;

use App\Models\Pedido\Pedido;
use App\Models\StatusPedido\StatusPedido;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\PedidoStatusPedido\PedidoStatusPedido;

class PedidoStatusPedidoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PedidoStatusPedido::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'pedido_id' => Pedido::factory()->create(),
            'status_pedido_id' => StatusPedido::factory()->create(),
        ];
    }
}
