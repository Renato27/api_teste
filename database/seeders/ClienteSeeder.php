<?php

namespace Database\Seeders;

use App\Models\Clientes\Cliente;
use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cliente::factory()->count(50)->create();
    }
}
