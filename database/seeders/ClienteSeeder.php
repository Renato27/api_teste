<?php

namespace Database\Seeders;

use App\Models\Clientes\Cliente;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $clientes = DB::connection('mysql2')->table('clientes')->get();

        foreach($clientes as $cliente){

            Cliente::create([
                'id'            => $cliente->idclientes,
                'razao_social' => $cliente->razaoSocial,
                'nome_fantasia' => $cliente->nomeFantasia,
                'cpf_cnpj'      => $cliente->cpfCnpj,
                'inscricao_estadual'    => $cliente->inscricaoEstadual,
                'inscricao_municipal'  => $cliente->inscricaoMunicipal,
                'created_at' => $cliente->created,
                'updated_at' => $cliente->updated
            ]);
        }
    }
}
