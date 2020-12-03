<?php

namespace App\Services\Funcionarios\ExcluirFuncionario\Contracts;

use App\Repositories\Contracts\FuncionarioRepository;

interface ExcluirFuncionarioService
{
    /**
     * Seta o funcionario a ser excluído.
     *
     * @param integer $funcionario
     * @return ExcluirFuncionarioService
     */
    public function setFuncionario(int $funcionario) : ExcluirFuncionarioService;

    /**
     * Seta o repositório de funcionario.
     *
     * @param FuncionarioRepository $funcionarioRepository
     * @return ExcluirFuncionarioService
     */
    public function setFuncionarioRepository(FuncionarioRepository $funcionarioRepository) : ExcluirFuncionarioService;

    /**
     * Processa a exclusão do funcionario.
     *
     * @return boolean
     */
    public function handle() : bool;
}
