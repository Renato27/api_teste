<?php

namespace Database\Factories\FuncionarioEndereco;

use App\Models\EnderecoFuncionario\EnderecoFuncionario;
use App\Models\Funcionario\Funcionario;
use App\Models\FuncionarioEndereco\FuncionarioEndereco;
use Illuminate\Database\Eloquent\Factories\Factory;

class FuncionarioEnderecoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = FuncionarioEndereco::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'funcionario_id'            => Funcionario::factory()->create(),
            'endereco_funcionario_id'   => EnderecoFuncionario::factory()->create()
        ];
    }
}
