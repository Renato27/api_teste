<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Services\Funcionarios\CadastrarFuncionario;

use Illuminate\Support\Facades\DB;
use App\Models\Funcionario\Funcionario;
use App\Services\Funcionarios\CadastrarFuncionario\Abstracts\CadastrarFuncionarioServiceAbstract;

class CadastrarFuncionarioService extends CadastrarFuncionarioServiceAbstract
{
    /**
     * Processa os dados para cadastrar um funcionario.
     *
     * @return Funcionario
     */
    public function handle() : ?Funcionario
    {
        $funcionario = null;

        DB::transaction(function () use (&$funcionario) {
            $funcionario = $this->cadastrarFuncionario();
        });

        return $funcionario;
    }
}
