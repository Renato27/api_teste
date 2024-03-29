<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace Database\Factories\ClienteEndereco;

use App\Models\Clientes\Cliente;
use App\Models\Endereco\Endereco;
use App\Models\ClienteEndereco\ClienteEndereco;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClienteEnderecoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ClienteEndereco::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cliente_id' => Cliente::factory()->create(),
            'endereco_id' => Endereco::factory()->create(),
        ];
    }
}
