<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Services\Clientes\ExcluirCliente;

use Illuminate\Support\Facades\DB;
use App\Services\Clientes\ExcluirCliente\Abstracts\ExcluirClienteServiceAbstract;

class ExcluirClienteService extends ExcluirClienteServiceAbstract
{
    /**
     * Processa a exclusão do cliente.
     *
     * @return bool
     */
    public function handle() : bool
    {
        $clienteExcluido = false;

        DB::transaction(function () use (&$clienteExcluido) {
            $clienteExcluido = $this->excluirCliente();
        });

        return $clienteExcluido;
    }
}
