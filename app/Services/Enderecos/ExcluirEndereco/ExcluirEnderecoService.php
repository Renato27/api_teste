<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Services\Enderecos\ExcluirEndereco;

use Illuminate\Support\Facades\DB;
use App\Services\Enderecos\ExcluirEndereco\Abstracts\ExcluirEnderecoServiceAbstract;

class ExcluirEnderecoService extends ExcluirEnderecoServiceAbstract
{
    /**
     * Processa a exclusão de um endereço.
     *
     * @return bool
     */
    public function handle() : bool
    {
        $enderecoExcluido = false;

        DB::transaction(function () use (&$enderecoExcluido) {
            $enderecoExcluido = $this->excluirEndereco();
        });

        return $enderecoExcluido;
    }
}
