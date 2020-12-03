<?php

namespace App\Services\Contatos\ExcluirContato;

use App\Services\Contatos\ExcluirContato\Abstracts\ExcluirContatoServiceAbstract;
use Illuminate\Support\Facades\DB;

class ExcluirContatoService extends ExcluirContatoServiceAbstract
{
    /**
     * Processa a exclusão do contato.
     *
     * @return boolean
     */
    public function handle() : bool
    {
        $contatoExcluido = false;

        DB::transaction(function ()  use(&$contatoExcluido){

            $contatoExcluido = $this->excluirContato();
        });

        return $contatoExcluido;
    }
}
