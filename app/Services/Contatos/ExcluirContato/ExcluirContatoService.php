<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Services\Contatos\ExcluirContato;

use Illuminate\Support\Facades\DB;
use App\Services\Contatos\ExcluirContato\Abstracts\ExcluirContatoServiceAbstract;

class ExcluirContatoService extends ExcluirContatoServiceAbstract
{
    /**
     * Processa a exclusão do contato.
     *
     * @return bool
     */
    public function handle() : bool
    {
        $contatoExcluido = false;

        DB::transaction(function () use (&$contatoExcluido) {
            $contatoExcluido = $this->excluirContato();
        });

        return $contatoExcluido;
    }
}
