<?php

namespace Database\Factories\ContratoMedicaoTipo;

use App\Models\ContratoMedicaoTipo\ContratoMedicaoTipo;
use App\Models\Contratos\Contrato;
use App\Models\MedicaoTipo\MedicaoTipo;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContratoMedicaoTipoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ContratoMedicaoTipo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'contrato_id'               => Contrato::factory()->create(),
            'medicao_tipo_id'           => MedicaoTipo::factory()->create()
        ];
    }
}
