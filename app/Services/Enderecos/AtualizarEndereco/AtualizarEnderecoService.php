<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Services\Enderecos\AtualizarEndereco;

use App\Models\Endereco\Endereco;
use Illuminate\Support\Facades\DB;
use App\Services\Enderecos\AtualizarEndereco\Abstracts\AtualizarEnderecoServiceAbstract;

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

        DB::transaction(function () use (&$endereco) {
            $endereco = $this->atualizarEndereco();
        });

        return $endereco;
    }
}
