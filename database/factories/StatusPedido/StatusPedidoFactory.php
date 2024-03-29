<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace Database\Factories\StatusPedido;

use App\Models\StatusPedido\StatusPedido;
use Illuminate\Database\Eloquent\Factories\Factory;

class StatusPedidoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = StatusPedido::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome' => $this->faker->name(),
        ];
    }
}
