<?php

namespace Database\Seeders;

use App\Models\EnderecoFornecedor\EnderecoFornecedor;
use App\Models\Fornecedor\Fornecedor;
use App\Models\FornecedorEndereco\FornecedorEndereco;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fornecedores = DB::connection('mysql2')->table('fornecedores')->get();

        foreach ($fornecedores as $fornecedor) {
            $fornecedorNovo =   Fornecedor::create([
                'razao_social' => $fornecedor->razaoSocial,
                'nome_fantasia' => null,
                'cpf_cnpj' => null,
                'observacao' => $fornecedor->observacao,
            ]);

            $enderecoNovo = EnderecoFornecedor::create([
                'rua'           => null,
                'numero'        => null,
                'bairro'        => null,
                'complemento'   => null,
                'cidade'        => null,
                'estado'        => null,
                'cep'           => null
            ]);

            FornecedorEndereco::create([
                'fornecedor_id' => $fornecedorNovo->id,
                'endereco_fornecedor_id' => $enderecoNovo->id
            ]);
        }
    }
}
