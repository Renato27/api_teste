<?php

namespace App\Services\Clientes\ExcluirCliente;

use App\Services\Clientes\ExcluirCliente\Abstracts\ExcluirClienteServiceAbstract;
use Illuminate\Support\Facades\DB;

class ExcluirClienteService extends ExcluirClienteServiceAbstract
{
    /**
     * Processa a exclusão do cliente.
     *
     * @return boolean
     */
    public function handle() : bool
    {   
        $clienteExcluido = false;

        DB::transaction(function () use(&$clienteExcluido){

            $clienteExcluido = $this->excluirCliente();
            
        });

        return $clienteExcluido;
    }
}
