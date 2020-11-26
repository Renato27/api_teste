<?php

namespace App\Services\Enderecos\CadastrarEndereco;

use App\Models\Endereco\Endereco;
use App\Services\Enderecos\CadastrarEndereco\Abstracts\CadastrarEnderecoServiceAbstract;
use Illuminate\Support\Facades\DB;

class CadastrarEnderecoService extends CadastrarEnderecoServiceAbstract
{
    /**
     * Processa o cadastro do endereço.
     *
     * @return Endereco
     */
    public function handle() : ?Endereco
    {
        $endereco = null;

        DB::transaction(function () use(&$endereco){
            
            $endereco = $this->cadastrarEndereco();
        });

        return $endereco;
    }
}
