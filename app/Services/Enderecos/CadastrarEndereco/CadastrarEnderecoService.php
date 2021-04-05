<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Services\Enderecos\CadastrarEndereco;

use App\Models\Endereco\Endereco;
use Illuminate\Support\Facades\DB;
use App\Services\Enderecos\CadastrarEndereco\Abstracts\CadastrarEnderecoServiceAbstract;

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

        DB::transaction(function () use (&$endereco) {
            $endereco = $this->cadastrarEndereco();
        });

        return $endereco;
    }
}
