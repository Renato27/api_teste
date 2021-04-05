<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Services\Clientes\AtualizarCliente;

use App\Models\Clientes\Cliente;
use Illuminate\Support\Facades\DB;
use App\Services\Clientes\AtualizarCliente\Abstracts\AtualizarClienteServiceAbstract;

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

        DB::transaction(function () use (&$cliente) {
            $cliente = $this->atualizarCliente();
        });

        return $cliente;
    }
}
