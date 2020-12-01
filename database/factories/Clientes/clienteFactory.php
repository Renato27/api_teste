<?php

namespace Database\Factories\clientes;

use App\Models\clientes\cliente;
use Illuminate\Database\Eloquent\Factories\Factory;

class clienteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = cliente::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'razao_social'              => $this->faker->name(5),
            'nome_fantasia'             => $this->faker->name(3),
            'cpf_cnpj'                  => $this->faker->numberBetween(10000000000001, 99999999999999),
            'inscricao_estadual'        => $this->faker->numberBetween(100000000, 999999999),
            'inscricao_municipal'       => $this->faker->numberBetween(10000000000, 99999999999)
        ];
    }
}
