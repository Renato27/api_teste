<?php

namespace Database\Factories\ContatoEnderecos;

use App\Models\Contato\Contato;
use App\Models\ContatoEnderecos\ContatoEnderecos;
use App\Models\Endereco\Endereco;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContatoEnderecosFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ContatoEnderecos::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'contato_id'            => Contato::factory()->create(),
            'endereco_id'           => Endereco::factory()->create()
        ];
    }
}
