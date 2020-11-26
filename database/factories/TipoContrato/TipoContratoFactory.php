<?php

namespace Database\Factories\TipoContrato;

use App\Models\Contratos\Contrato;
use App\Models\ContratoTipo\ContratoTipo;
use App\Models\TipoContrato\TipoContrato;
use Illuminate\Database\Eloquent\Factories\Factory;

class TipoContratoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TipoContrato::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'contrato_id'               => Contrato::factory()->create(),
            'contrato_tipo_id'          => ContratoTipo::factory()->create()
        ];
    }
}
