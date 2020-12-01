<?php

namespace Database\Factories\Pedido;

use App\Models\Pedido\Pedido;
use Illuminate\Database\Eloquent\Factories\Factory;

class PedidoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pedido::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'data_entrega'      => $this->faker->date(),
            'data_retirada'     => $this->faker->date()
        ];
    }
}
