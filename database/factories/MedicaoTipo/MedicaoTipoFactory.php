<?php

namespace Database\Factories\MedicaoTipo;

use App\Models\MedicaoTipo\MedicaoTipo;
use Illuminate\Database\Eloquent\Factories\Factory;

class MedicaoTipoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MedicaoTipo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome'              => $this->faker->name(1)
        ];
    }
}
