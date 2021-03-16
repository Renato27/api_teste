<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Services\Contatos\CadastrarContato;

use App\Models\Contato\Contato;
use Illuminate\Support\Facades\DB;
use App\Services\Contatos\CadastrarContato\Abstracts\CadastrarContatoServiceAbstract;

class CadastrarContatoService extends CadastrarContatoServiceAbstract
{
    /**
     * Processa os dados para cadastrar um contato.
     *
     * @return Contato
     */
    public function handle() : ?Contato
    {
        $contato = null;

        DB::transaction(function () use (&$contato) {
            $contato = $this->cadastrarContato();
            $this->cadastrarEmailContato($contato);
        });

        return $contato;
    }
}
