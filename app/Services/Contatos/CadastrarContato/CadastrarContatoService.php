<?php

namespace App\Services\Contatos\CadastrarContato;

use App\Models\Contato\Contato;
use App\Services\Contatos\CadastrarContato\Abstracts\CadastrarContatoServiceAbstract;
use Illuminate\Support\Facades\DB;

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

        DB::transaction(function () use(&$contato){
            
            $contato = $this->cadastrarContato();
            $this->cadastrarEmailContato($contato);
        });

        return $contato;
    }
}
