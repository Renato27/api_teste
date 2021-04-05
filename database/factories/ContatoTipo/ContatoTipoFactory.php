<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace Database\Factories\ContatoTipo;

use App\Models\Contato\Contato;
use App\Models\ContatoTipo\ContatoTipo;
use App\Models\TipoContato\TipoContato;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContatoTipoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ContatoTipo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'contato_id' => Contato::factory()->create(),
            'tipo_contato_id' => TipoContato::factory()->create(),
        ];
    }
}
