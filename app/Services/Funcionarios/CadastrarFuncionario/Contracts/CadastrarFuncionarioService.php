<?php

namespace App\Services\Funcionarios\CadastrarFuncionario\Contracts;

use App\Models\Funcionario\Funcionario;
use App\Repositories\Contracts\FuncionarioRepository;

interface CadastrarFuncionarioService
{
    /**
     * Seta os dados para cadastrar um Funcionario.
     *
     * @param array $dados
     * @return CadastrarFuncionarioService
     */
    public function setDados(array $dados) : CadastrarFuncionarioService;

    /**
     * Seta o repositório de funcionario.
     *
     * @param FuncionarioRepository $funcionarioRepository
     * @return CadastrarFuncionarioService
     */
    public function setFuncionarioRepository(FuncionarioRepository $funcionarioRepository) : CadastrarFuncionarioService;

    /**
     * Processa os dados para cadastrar um funcionario.
     *
     * @return Funcionario
     */
    public function handle() : ?Funcionario;
}
