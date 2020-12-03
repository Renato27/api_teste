<?php

namespace App\Services\Funcionarios\ExcluirFuncionario;

use App\Services\Funcionarios\ExcluirFuncionario\Abstracts\ExcluirFuncionarioServiceAbstract;
use Illuminate\Support\Facades\DB;

class ExcluirFuncionarioService extends ExcluirFuncionarioServiceAbstract
{
    /**
     * Processa a exclusão do funcionario.
     *
     * @return boolean
     */
    public function handle() : bool
    {
        $funcionarioExcluido = false;

        DB::transaction(function ()  use(&$funcionarioExcluido){

            $funcionarioExcluido = $this->excluirFuncionario();
        });

        return $funcionarioExcluido;
    }
}
