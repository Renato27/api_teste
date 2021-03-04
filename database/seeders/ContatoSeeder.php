<?php

namespace Database\Seeders;

use App\Models\Contato\Contato;
use Illuminate\Database\Seeder;

class ContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contato::factory()->count(50)->create();
    }
}
