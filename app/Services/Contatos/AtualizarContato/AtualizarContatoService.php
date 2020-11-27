<?php

namespace App\Services\Contatos\AtualizarContato;

use App\Models\Contato\Contato;
use Illuminate\Support\Facades\DB;
use App\Services\Contatos\AtualizarContato\Abstracts\AtualizarContatoServiceAbstract;

class AtualizarContatoService extends AtualizarContatoServiceAbstract
{
    /**
     * Processa a atualização do contato.
     *
     * @return Contato|null
     */
    public function handle() : ?Contato
    {
        $contato = null;

        DB::transaction(function() use(&$contato){
            
            $contato = $this->atualizarContato();
        });

        return $contato;
    }
}
