<?php

namespace Database\Seeders;

use App\Models\ClienteContato\ClienteContato;
use App\Models\Contato\Contato;
use App\Models\ContatoEmail\ContatoEmail;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contatos = DB::connection('mysql2')->table('contatos')->get();

        foreach ($contatos as $contato) {
           Contato::create([
               'id'             => $contato->idcontatos,
               'nome'            => $contato->nome,
               'cargo'         => $contato->cargo,
               'telefone'         => $contato->telefone,
               'celular'    => $contato->celular,
               'principal'         => $contato->principal
           ]);

            ContatoEmail::create([
                'email'     => $contato->email,
                'principal' => $contato->principal,
                'contato_id' => $contato->idcontatos
            ]);
        }


        $clienteContatos = DB::connection('mysql2')->table('cliente_contatos')->get();

        foreach ($clienteContatos as $clienteContato) {
            ClienteContato::create([
                'id'            => $clienteContato->id,
                'cliente_id'    => $clienteContato->cliente_id,
                'contato_id'   => $clienteContato->contato_id
            ]);
        }


    }
}
