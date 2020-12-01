<?php

namespace Database\Factories\ContatoEmail;

use App\Models\Contato\Contato;
use App\Models\ContatoEmail\ContatoEmail;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContatoEmailFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ContatoEmail::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'email'             => $this->faker->email,
            'principal'         => $this->faker->numberBetween(0,1),
            'contato_id'        => Contato::factory()->create()
        ];
    }
}
