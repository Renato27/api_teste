<?php

namespace App\Services\Funcionarios\AtualizarFuncionario\Contracts;

use App\Models\Funcionario\Funcionario;
use App\Repositories\Contracts\FuncionarioRepository;

interface AtualizarFuncionarioService
{
    /**
     * Seta um Funcionario a ser atualizado.
     *
     * @param integer $funcionario
     * @return AtualizarFuncionarioService
     */
    public function setFuncionario(int $funcionario) : AtualizarFuncionarioService;

    /**
     * Seta os dados a serem atualizados.
     *
     * @param array $dados
     * @return AtualizarFuncionarioService
     */
    public function setDados(array $dados) : AtualizarFuncionarioService;

    /**
     * Seta o repositório de funcionario.
     *
     * @param FuncionarioRepository $funcionarioRepository
     * @return AtualizarFuncionarioService
     */
    public function setFuncionarioRepository(FuncionarioRepository $funcionarioRepository) : AtualizarFuncionarioService;

    /**
     * Processa a atualização do funcionario.
     *
     * @return Funcionario|null
     */
    public function handle() : ?Funcionario;
}
