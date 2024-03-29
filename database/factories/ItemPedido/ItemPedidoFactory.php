<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace Database\Factories\ItemPedido;

use App\Models\ItemPedido\ItemPedido;
use Illuminate\Database\Eloquent\Factories\Factory;

class ItemPedidoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ItemPedido::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'valor' => $this->faker->numberBetween(10, 2),
            'quantidade' => $this->faker->numberBetween(1, 100),
            'informacoes' => $this->faker->text(),
        ];
    }
}
