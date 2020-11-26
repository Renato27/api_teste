<?php

namespace App\Services\Enderecos\AtualizarEndereco;

use App\Models\Endereco\Endereco;
use App\Services\Enderecos\AtualizarEndereco\Abstracts\AtualizarEnderecoServiceAbstract;
use Illuminate\Support\Facades\DB;

class AtualizarEnderecoService extends AtualizarEnderecoServiceAbstract
{
    /**
     * Processa a atualização do endereço.
     *
     * @return Endereco|null
     */
    public function handle() : ?Endereco
    {
        $endereco = null;

        DB::transaction(function () use(&$endereco){
            
            $endereco = $this->atualizarEndereco();
        });

        return $endereco;
    }
}
