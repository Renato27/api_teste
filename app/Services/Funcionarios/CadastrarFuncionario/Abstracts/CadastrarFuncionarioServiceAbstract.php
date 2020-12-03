<?php

namespace App\Services\Funcionarios\CadastrarFuncionario\Abstracts;

use App\Models\Funcionario\Funcionario;
use App\Repositories\Contracts\FuncionarioRepository;
use App\Services\Funcionarios\CadastrarFuncionario\Contracts\CadastrarFuncionarioService;
use Exception;

abstract class CadastrarFuncionarioServiceAbstract implements CadastrarFuncionarioService
{

    /**
     * Dados a serem cadastrados;
     *
     * @var array
     */
    protected array $dados;

    /**
     * Repositório de Funcionario.
     *
     * @var FuncionarioRepository
     */
    protected FuncionarioRepository $funcionarioRepository;

    /**
     * Seta os dados para cadastrar um Funcionario.
     *
     * @param array $dados
     * @return CadastrarFuncionarioService
     */
    public function setDados(array $dados) : CadastrarFuncionarioService
    {
        $dadosContato = [
            'nome'      => $dados['nome'],
            'cargo'     => $dados['cargo'],
        ];

        $this->dados = $dadosContato;

        return $this;
    }

    /**
     * Seta o repositório de Funcionario.
     *
     * @param FuncionarioRepository $funcionarioRepository
     * @return CadastrarFuncionarioService
     */
    public function setFuncionarioRepository(FuncionarioRepository $funcionarioRepository) : CadastrarFuncionarioService
    {
        $this->funcionarioRepository = $funcionarioRepository;

        return $this;
    }

    /**
     * Processa os dados e cadastra o Funcionario.
     *
     * @return Funcionario
     */
    protected function cadastrarFuncionario() : Funcionario
    {
        $funcionarioCadastrado = $this->funcionarioRepository->createFuncionario($this->dados);

        if(!isset($funcionarioCadastrado->id))
            throw new Exception("Não foi possível cadastrar o funcionario. Verifique os dados e tente novamente.");

        return $funcionarioCadastrado;
    }
}
