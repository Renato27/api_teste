<?php

namespace App\Services\Funcionarios\CadastrarFuncionario;

use App\Models\Funcionario\Funcionario;
use App\Services\Funcionarios\CadastrarFuncionario\Abstracts\CadastrarFuncionarioServiceAbstract;
use Illuminate\Support\Facades\DB;

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

        DB::transaction(function () use(&$funcionario){

            $funcionario = $this->cadastrarFuncionario();
        });

        return $funcionario;
    }
}
