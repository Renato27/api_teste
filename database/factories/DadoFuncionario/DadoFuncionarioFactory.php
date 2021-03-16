<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace Database\Factories\DadoFuncionario;

use App\Models\DadoFuncionario\DadoFuncionario;
use Illuminate\Database\Eloquent\Factories\Factory;

class DadoFuncionarioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DadoFuncionario::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'telefone' => $this->faker->numberBetween(900000000, 999999999),
            'rg' => $this->faker->numberBetween(10000000, 99999999),
            'cpf' => $this->faker->numberBetween(10000000000, 99999999999),
            'titulo_eleitor' => $this->faker->numberBetween(100000000000, 999999999999),
            'secao_titulo_eleitor' => $this->faker->numberBetween(1, 999),
            'ctps' => $this->faker->numberBetween(1000000000, 9999999999),
            'email' => $this->faker->email,
        ];
    }
}
