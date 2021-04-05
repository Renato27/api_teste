<?php

namespace Database\Seeders;

use App\Models\ClienteProcesso\ClienteProcesso;
use App\Models\ClienteProcessoEstado\ClienteProcessoEstado;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClienteProcessoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $processo_estados = DB::connection('mysql2')->table('cliente_processo_estados')->get();

        foreach($processo_estados as $estado){
            ClienteProcessoEstado::create([
                'id'    => $estado->id,
                'nome'  => $estado->nome
            ]);
        }


        $processos = DB::connection('mysql2')->table('cliente_processos')->get();

        foreach($processos as $processo){
            ClienteProcesso::create([
                'id'            => $processo->id,
                'cliente_id'    => $processo->cliente_id,
                'cliente_processo_estado_id' => $processo->cliente_processo_estado_id
            ]);
        }
    }
}
