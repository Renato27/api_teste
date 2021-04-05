<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace Database\Factories\Contratos;

use App\Models\Contratos\Contrato;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContratoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Contrato::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome' => $this->faker->name(),
            'inicio' => $this->faker->date(),
            'fim' => $this->faker->date(),
            'detalhes' => $this->faker->text(),
            'detalhes_nota' => $this->faker->text(),
            'dia_emissao_nota' => $this->faker->numberBetween(1, 31),
            'dia_vencimento_nota' => $this->faker->numberBetween(1, 31),
            'dia_periodo_inicio_nota' => $this->faker->numberBetween(1, 31),
            'dia_periodo_fim_nota' => $this->faker->numberBetween(1, 31),
            'responsavel' => $this->faker->name(),
        ];
    }
}
