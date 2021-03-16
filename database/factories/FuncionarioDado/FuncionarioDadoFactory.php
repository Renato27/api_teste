<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace Database\Factories\FuncionarioDado;

use App\Models\Funcionario\Funcionario;
use App\Models\DadoFuncionario\DadoFuncionario;
use App\Models\FuncionarioDado\FuncionarioDado;
use Illuminate\Database\Eloquent\Factories\Factory;

class FuncionarioDadoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = FuncionarioDado::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'funcionario_id' => Funcionario::factory()->create(),
            'dado_funcionario_id' => DadoFuncionario::factory()->create(),
        ];
    }
}
