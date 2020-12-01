<?php

namespace Database\Factories\Endereco;

use App\Models\Endereco\Endereco;
use Illuminate\Database\Eloquent\Factories\Factory;

class EnderecoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Endereco::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'rua'               => $this->faker->address,
            'numero'            => $this->faker->numberBetween(1, 500),
            'bairro'            => $this->faker->text(5),
            'complemento'       => $this->faker->text(15),
            'cidade'            => $this->faker->city,
            'estado'            => $this->faker->name(2),
            'cep'               => $this->faker->numberBetween(10000, 99999)
        ];
    }
}
