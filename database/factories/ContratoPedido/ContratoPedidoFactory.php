<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace Database\Factories\ContratoPedido;

use App\Models\Pedido\Pedido;
use App\Models\Contratos\Contrato;
use App\Models\ContratoPedido\ContratoPedido;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContratoPedidoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ContratoPedido::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'pedido_id' => Pedido::factory()->create(),
            'contrato_id' => Contrato::factory()->create(),
        ];
    }
}
