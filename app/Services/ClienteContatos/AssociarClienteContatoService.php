<?php

namespace App\Services\ClienteContatos;

use App\Models\ClienteContato\ClienteContato;
use App\Services\ClienteContatos\Abstracts\AssociarClienteContatoServiceAbstract;
use Illuminate\Support\Facades\DB;

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

        DB::transaction(function () use(&$clienteContato){
            
            $clienteContato = $this->associarClienteContato();
        });

        return $clienteContato;
    }
}
