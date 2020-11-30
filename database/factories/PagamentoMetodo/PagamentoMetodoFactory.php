<?php

namespace Database\Factories\PagamentoMetodo;

use App\Models\PagamentoMetodo\PagamentoMetodo;
use Illuminate\Database\Eloquent\Factories\Factory;

class PagamentoMetodoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PagamentoMetodo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome'              => $this->faker->name(),
            'detalhes'          => $this->faker->text()
        ];
    }
}
