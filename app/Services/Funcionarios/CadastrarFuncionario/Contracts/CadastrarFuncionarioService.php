<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

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
    public function setDados(array $dados) : self;

    /**
     * Seta o repositório de funcionario.
     *
     * @param FuncionarioRepository $funcionarioRepository
     * @return CadastrarFuncionarioService
     */
    public function setFuncionarioRepository(FuncionarioRepository $funcionarioRepository) : self;

    /**
     * Processa os dados para cadastrar um funcionario.
     *
     * @return Funcionario
     */
    public function handle() : ?Funcionario;
}
