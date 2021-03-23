<?php

namespace Database\Seeders;

use App\Models\NotaSerasa\NotaSerasa;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NotaSerasaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nota_protestos = DB::connection('mysql2')->table('nota_protestos')->get();

        foreach($nota_protestos as $protesto){

            NotaSerasa::create([
                'id'            => $protesto->id,
                'nota_id'       => $protesto->nota_id,
                'cliente_id'    => $protesto->cliente_id,
                'created_at'    => $protesto->created_at
            ]);
        }
    }
}
