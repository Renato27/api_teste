<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Services\Funcionarios\AtualizarFuncionario\Contracts;

use App\Models\Funcionario\Funcionario;
use App\Repositories\Contracts\FuncionarioRepository;

interface AtualizarFuncionarioService
{
    /**
     * Seta um Funcionario a ser atualizado.
     *
     * @param int $funcionario
     * @return AtualizarFuncionarioService
     */
    public function setFuncionario(int $funcionario) : self;

    /**
     * Seta os dados a serem atualizados.
     *
     * @param array $dados
     * @return AtualizarFuncionarioService
     */
    public function setDados(array $dados) : self;

    /**
     * Seta o repositório de funcionario.
     *
     * @param FuncionarioRepository $funcionarioRepository
     * @return AtualizarFuncionarioService
     */
    public function setFuncionarioRepository(FuncionarioRepository $funcionarioRepository) : self;

    /**
     * Processa a atualização do funcionario.
     *
     * @return Funcionario|null
     */
    public function handle() : ?Funcionario;
}
