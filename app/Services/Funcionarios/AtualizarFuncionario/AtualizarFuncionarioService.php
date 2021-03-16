<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Services\Funcionarios\AtualizarFuncionario;

use Illuminate\Support\Facades\DB;
use App\Models\Funcionario\Funcionario;
use App\Services\Funcionarios\AtualizarFuncionario\Abstracts\AtualizarFuncionarioServiceAbstract;

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

        DB::transaction(function () use (&$funcionario) {
            $funcionario = $this->atualizarFuncionario();
        });

        return $funcionario;
    }
}
