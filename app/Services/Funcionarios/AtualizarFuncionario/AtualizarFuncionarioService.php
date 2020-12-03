<?php

namespace App\Services\Funcionarios\AtualizarFuncionario;

use App\Models\Funcionario\Funcionario;
use App\Services\Funcionarios\AtualizarFuncionario\Abstracts\AtualizarFuncionarioServiceAbstract;
use Illuminate\Support\Facades\DB;

class AtualizarFuncionarioService extends AtualizarFuncionarioServiceAbstract
{
    /**
     * Processa a atualização do funcionario.
     *
     * @return Funcionario|null
     */
    public function handle() : ?Funcionario
    {
        $funcionario = null;

        DB::transaction(function() use(&$funcionario){

            $funcionario = $this->atualizarFuncionario();
        });

        return $funcionario;
    }
}
