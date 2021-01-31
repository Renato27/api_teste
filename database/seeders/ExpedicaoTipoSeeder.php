<?php

namespace Database\Seeders;

use App\Models\ExpedicaoTipo\ExpedicaoTipo;
use Illuminate\Database\Seeder;

class ExpedicaoTipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ExpedicaoTipo::create([
            'nome' => 'Entrega'
        ]);
        ExpedicaoTipo::create([
            'nome' => 'Retirada'
        ]);
    }
}
