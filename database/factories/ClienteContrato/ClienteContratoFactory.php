<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace Database\Factories\ClienteContrato;

use App\Models\Clientes\Cliente;
use App\Models\Contratos\Contrato;
use App\Models\ClienteContrato\ClienteContrato;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClienteContratoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ClienteContrato::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cliente_id' => Cliente::factory()->create(),
            'contrato_id' => Contrato::factory()->create(),
        ];
    }
}
