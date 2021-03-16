<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Endereco\Endereco;
use Illuminate\Support\Facades\DB;
use App\Models\ClienteEndereco\ClienteEndereco;

class EnderecoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $enderecos = DB::connection('mysql2')->table('enderecos')->get();

        foreach ($enderecos as $endereco) {
            Endereco::create([
                'id' => $endereco->idenderecos,
                'rua' => $endereco->rua,
                'numero' => $endereco->numero,
                'bairro' => $endereco->bairro,
                'complemento' => $endereco->complemento,
                'cidade' => $endereco->cidade,
                'estado' => $endereco->estado,
                'cep' => $endereco->cep,
                'principal' => $endereco->principal,
            ]);
        }

        $clienteEnderecos = DB::connection('mysql2')->table('cliente_enderecos')->get();

        foreach ($clienteEnderecos as $clienteEndereco) {
            ClienteEndereco::create([
                'id' => $clienteEndereco->id,
                'cliente_id' => $clienteEndereco->cliente_id,
                'endereco_id' => $clienteEndereco->endereco_id,
            ]);
        }
    }
}
