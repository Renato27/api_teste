<?php

namespace App\Services\Contatos\CadastrarContato\Abstracts;

use App\Models\Contato\Contato;
use App\Repositories\Contracts\ContatoRepository;
use App\Services\Contatos\CadastrarContato\Contracts\CadastrarContatoService;
use Exception;

abstract class CadastrarContatoServiceAbstract implements CadastrarContatoService
{

    /**
     * Dados a serem cadastrados;
     *
     * @var array
     */
    protected array $dados;

    /**
     * Repositório de contato.
     *
     * @var ContatoRepository
     */
    protected ContatoRepository $contatoRepository;

    /**
     * Seta os dados para cadastrar um contato.
     *
     * @param array $dados
     * @return CadastrarContatoService
     */
    public function setDados(array $dados) : CadastrarContatoService
    {
        $dadosContato = [
            'nome'      => $dados['nome'],
            'cargo'     => $dados['cargo'],
            'telefone'  => $dados['telefone'],
            'celular'   => $dados['celular']
        ];

        $this->dados = $dadosContato;

        return $this;
    }

    /**
     * Seta o repositório de contato.
     *
     * @param ContatoRepository $contatoRepository
     * @return CadastrarContatoService
     */
    public function setContatoRepository(ContatoRepository $contatoRepository) : CadastrarContatoService
    {
        $this->contatoRepository = $contatoRepository;

        return $this;
    }

    /**
     * Processa os dados e cadastra o contato.
     *
     * @return Contato
     */
    protected function cadastrarContato() : Contato
    {
        $contatoCadastrado = $this->contatoRepository->createContato($this->dados);

        if(!isset($contatoCadastrado->id)) 
            throw new Exception("Não foi possível cadastrar o contato. Verifique os dados e tente novamente.");

        return $contatoCadastrado;    
    }
}
