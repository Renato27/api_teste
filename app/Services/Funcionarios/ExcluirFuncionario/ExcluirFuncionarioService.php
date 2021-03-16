<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Services\Funcionarios\ExcluirFuncionario;

use Illuminate\Support\Facades\DB;
use App\Services\Funcionarios\ExcluirFuncionario\Abstracts\ExcluirFuncionarioServiceAbstract;

class ExcluirFuncionarioService extends ExcluirFuncionarioServiceAbstract
{
    /**
     * Processa a exclusão do funcionario.
     *
     * @return bool
     */
    public function handle() : bool
    {
        $funcionarioExcluido = false;

        DB::transaction(function () use (&$funcionarioExcluido) {
            $funcionarioExcluido = $this->excluirFuncionario();
        });

        return $funcionarioExcluido;
    }
}
