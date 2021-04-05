<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Services\Clientes\CadastrarCliente;

use App\Models\Clientes\Cliente;
use Illuminate\Support\Facades\DB;
use App\Services\Clientes\CadastrarCliente\Abstracts\CadastrarClienteServiceAbstract;

class CadastrarClienteService extends CadastrarClienteServiceAbstract
{
    /**
     * Processa o cadastro do cliente.
     *
     * @return Cliente
     */
    public function handle() : ?Cliente
    {
        $cliente = null;

        DB::transaction(function () use (&$cliente) {
            $cliente = $this->cadastrarCliente();
        });

        return $cliente;
    }
}
