<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Services\Funcionarios\ExcluirFuncionario\Abstracts;

use Exception;
use App\Repositories\Contracts\FuncionarioRepository;
use App\Services\Funcionarios\ExcluirFuncionario\Contracts\ExcluirFuncionarioService;

abstract class ExcluirFuncionarioServiceAbstract implements ExcluirFuncionarioService
{
    /**
     * ID do funcionario.
     *
     * @var int
     */
    protected int $funcionario;

    /**
     * Repositório de funcionario.
     *
     * @var FuncionarioRepository
     */
    protected FuncionarioRepository $funcionarioRepository;

    /**
     * Seta o funcionario a ser excluído.
     *
     * @param int $funcionario
     * @return ExcluirFuncionarioService
     */
    public function setFuncionario(int $funcionario) : ExcluirFuncionarioService
    {
        $this->funcionario = $funcionario;

        return $this;
    }

    /**
     * Seta o repositório de funcionario.
     *
     * @param FuncionarioRepository $funcionarioRepository
     * @return ExcluirFuncionarioService
     */
    public function setFuncionarioRepository(FuncionarioRepository $funcionarioRepository) : ExcluirFuncionarioService
    {
        $this->funcionarioRepository = $funcionarioRepository;

        return $this;
    }

    protected function excluirFuncionario() : bool
    {
        $funcionario = $this->funcionarioRepository->getFuncionario($this->funcionario);

        if (! isset($funcionario->id)) {
            throw new Exception('O funcionário a ser excluído não existe.');
        }

        $funcionarioExcluído = $this->funcionarioRepository->deleteFuncionario($funcionario->id);

        if (! $funcionarioExcluído) {
            throw new Exception('Não foi possível excluir o funcionário solicitado.');
        }

        return $funcionarioExcluído;
    }
}
