<?php

namespace Database\Factories\ClienteContato;

use App\Models\ClienteContato\ClienteContato;
use App\Models\Clientes\Cliente;
use App\Models\Contato\Contato;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClienteContatoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ClienteContato::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cliente_id'            => Cliente::factory()->create(),
            'contato_id'           => Contato::factory()->create()
        ];
    }
}
