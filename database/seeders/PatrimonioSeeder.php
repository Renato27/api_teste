<?php

namespace Database\Seeders;

use App\Models\Patrimonio\Patrimonio;
use Illuminate\Database\Seeder;

class PatrimonioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Patrimonio::factory()->count(50)->create([
            'numero_patrimonio' => rand()
        ]);
    }
}
