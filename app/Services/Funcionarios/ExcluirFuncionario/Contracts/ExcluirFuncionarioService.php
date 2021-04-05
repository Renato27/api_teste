<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Services\Funcionarios\ExcluirFuncionario\Contracts;

use App\Repositories\Contracts\FuncionarioRepository;

interface ExcluirFuncionarioService
{
    /**
     * Seta o funcionario a ser excluído.
     *
     * @param int $funcionario
     * @return ExcluirFuncionarioService
     */
    public function setFuncionario(int $funcionario) : self;

    /**
     * Seta o repositório de funcionario.
     *
     * @param FuncionarioRepository $funcionarioRepository
     * @return ExcluirFuncionarioService
     */
    public function setFuncionarioRepository(FuncionarioRepository $funcionarioRepository) : self;

    /**
     * Processa a exclusão do funcionario.
     *
     * @return bool
     */
    public function handle() : bool;
}
