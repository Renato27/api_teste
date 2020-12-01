<?php

namespace Database\Factories\ContratoPagamentoMetodo;

use App\Models\ContratoPagamentoMetodo\ContratoPagamentoMetodo;
use App\Models\Contratos\Contrato;
use App\Models\PagamentoMetodo\PagamentoMetodo;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContratoPagamentoMetodoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ContratoPagamentoMetodo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'contrato_id'           => Contrato::factory()->create(),
            'pagamento_metodo_id'   => PagamentoMetodo::factory()->create()
        ];
    }
}
