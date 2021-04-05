<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Services\ClienteEnderecos;

use Illuminate\Support\Facades\DB;
use App\Models\ClienteEndereco\ClienteEndereco;
use App\Services\ClienteEnderecos\Abstracts\AssociarClienteEnderecoServiceAbstract;

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

        DB::transaction(function () use (&$clienteEndereco) {
            $clienteEndereco = $this->associarClienteEndereco();
        });

        return $clienteEndereco;
    }
}
