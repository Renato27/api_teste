<?php

namespace Database\Factories\ClienteContrato;

use App\Models\ClienteContrato\ClienteContrato;
use App\Models\Clientes\Cliente;
use App\Models\Contratos\Contrato;
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
            'cliente_id'                => Cliente::factory()->create(),
            'contrato_id'               => Contrato::factory()->create()
        ];
    }
}
