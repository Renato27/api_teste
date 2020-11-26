<?php

namespace App\Services\Enderecos\ExcluirEndereco;

use App\Services\Enderecos\ExcluirEndereco\Abstracts\ExcluirEnderecoServiceAbstract;
use Illuminate\Support\Facades\DB;

class ExcluirEnderecoService extends ExcluirEnderecoServiceAbstract
{
    /**
     * Processa a exclusão de um endereço.
     *
     * @return boolean
     */
    public function handle() : bool
    {
        $enderecoExcluido = false;

        DB::transaction(function () use(&$enderecoExcluido){
            
            $enderecoExcluido = $this->excluirEndereco();
        });

        return $enderecoExcluido;
    }
}
