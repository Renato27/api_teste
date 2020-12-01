<?php

namespace Database\Factories\EnderecoFuncionario;

use App\Models\EnderecoFuncionario\EnderecoFuncionario;
use Illuminate\Database\Eloquent\Factories\Factory;

class EnderecoFuncionarioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = EnderecoFuncionario::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'rua'                   => $this->faker->address,
            'numero'                => $this->faker->numberBetween(1, 100),
            'bairro'               => $this->faker->name(2),
            'complemento'           => $this->faker->text(10),
            'cidade'                => $this->faker->city,
            'cep'                   => $this->faker->numberBetween(11111111, 99999999)
        ];
    }
}
