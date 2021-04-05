<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Services\Funcionarios\AtualizarFuncionario\Abstracts;

use Exception;
use App\Models\Funcionario\Funcionario;
use App\Repositories\Contracts\FuncionarioRepository;
use App\Services\Funcionarios\AtualizarFuncionario\Contracts\AtualizarFuncionarioService;

abstract class AtualizarFuncionarioServiceAbstract implements AtualizarFuncionarioService
{
    /**
     * Dados a serem atualizados.
     *
     * @var array
     */
    protected array $dados;

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
     * Seta um funcionario a ser atualizado.
     *
     * @param int $funcionario
     * @return AtualizarFuncionarioService
     */
    public function setFuncionario(int $funcionario) : AtualizarFuncionarioService
    {
        $this->funcionario = $funcionario;

        return $this;
    }

    /**
     * Seta os dados a serem atualizados.
     *
     * @param array $dados
     * @return AtualizarFuncionarioService
     */
    public function setDados(array $dados) : AtualizarFuncionarioService
    {
        $this->dados = $dados;

        return $this;
    }

    /**
     * Seta o repositório de funcionario.
     *
     * @param FuncionarioRepository $funcionarioRepository
     * @return AtualizarFuncionarioService
     */
    public function setFuncionarioRepository(FuncionarioRepository $funcionarioRepository) : AtualizarFuncionarioService
    {
        $this->funcionarioRepository = $funcionarioRepository;

        return $this;
    }

    /**
     * Processa os dados para atualizar um funcionario.
     *
     * @return Funcionario
     */
    protected function atualizarFuncionario() : Funcionario
    {
        $funcionario = $this->funcionarioRepository->getFuncionario($this->funcionario);

        if (! isset($funcionario->id)) {
            throw new Exception('O funcionário solicitado para atualização não existe');
        }

        $funcionarioAtualizado = $this->funcionarioRepository->updateFuncionario($funcionario->id, $this->dados);

        if (! isset($funcionarioAtualizado->id)) {
            throw new Exception('Não foi possivel atualizar o funcionário solicitado. Revise os dados e tente novamente');
        }

        return $funcionarioAtualizado;
    }
}
