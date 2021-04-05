<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Services\ClienteContatos;

use Illuminate\Support\Facades\DB;
use App\Models\ClienteContato\ClienteContato;
use App\Services\ClienteContatos\Abstracts\AssociarClienteContatoServiceAbstract;

class AssociarClienteContatoService extends AssociarClienteContatoServiceAbstract
{
    /**
     * Processa a associação de cliente contato.
     *
     * @return ClienteContato
     */
    public function handle() : ?ClienteContato
    {
        $clienteContato = null;

        DB::transaction(function () use (&$clienteContato) {
            $clienteContato = $this->associarClienteContato();
        });

        return $clienteContato;
    }
}
