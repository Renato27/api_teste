<?php

namespace App\Services\ClienteEnderecos;

use App\Models\ClienteEndereco\ClienteEndereco;
use App\Services\ClienteEnderecos\Abstracts\AssociarClienteEnderecoServiceAbstract;
use Illuminate\Support\Facades\DB;

class AssociarClienteEnderecoService extends AssociarClienteEnderecoServiceAbstract
{
    /**
     * Processa os dados para associar o cliente ao endereço.
     *
     * @return ClienteEndereco
     */
    public function handle() : ?ClienteEndereco
    {
        $clienteEndereco = null;

        DB::transaction(function () use(&$clienteEndereco){
            
            $clienteEndereco = $this->associarClienteEndereco();
        });

        return $clienteEndereco;
    }
}
