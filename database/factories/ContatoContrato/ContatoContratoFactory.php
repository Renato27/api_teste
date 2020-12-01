<?php

namespace Database\Factories\ContatoContrato;

use App\Models\Contato\Contato;
use App\Models\ContatoContrato\ContatoContrato;
use App\Models\Contratos\Contrato;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContatoContratoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ContatoContrato::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'contato_id'            => Contato::factory()->create(),
            'contrato_id'           => Contrato::factory()->create()
        ];
    }
}
