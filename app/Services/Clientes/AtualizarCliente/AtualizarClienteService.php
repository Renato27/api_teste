<?php

namespace App\Services\Clientes\AtualizarCliente;

use App\Models\Clientes\Cliente;
use App\Services\Clientes\AtualizarCliente\Abstracts\AtualizarClienteServiceAbstract;
use Illuminate\Support\Facades\DB;

class AtualizarClienteService extends AtualizarClienteServiceAbstract
{
    /**
     * Processa a atualização do cliente.
     *
     * @return Cliente|null
     */
    public function handle() : ?Cliente
    {
        $cliente = null;

        DB::transaction(function() use(&$cliente) {
            
            $cliente = $this->atualizarCliente();
        });
        
        return $cliente;
    }
}
