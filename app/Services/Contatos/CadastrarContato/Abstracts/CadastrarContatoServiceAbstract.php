<?php

namespace App\Services\Contatos\CadastrarContato\Abstracts;

use App\Models\Contato\Contato;
use App\Repositories\Contracts\ContatoEmailRepository;
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
     * Repositório de contato email.
     *
     * @var ContatoEmailRepository
     */
    protected ContatoEmailRepository $contatoEmailRepository;

    /**
     * Seta os dados para cadastrar um contato.
     *
     * @param array $dados
     * @return CadastrarContatoService
     */
    public function setDados(array $dados) : CadastrarContatoService
    {
        $dadosContato = [

            'contato' => [
                'nome'      => $dados['nome'],
                'cargo'     => $dados['cargo'],
                'telefone'  => $dados['telefone'],
                'celular'   => $dados['celular']
            ],

            'email' => [
                'email'     => $dados['email'],
                'principal' => $dados['principal'] ?? 0,
            ]

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
     * Seta o repositório de contato email.
     *
     * @param ContatoEmailRepository $contatoEmailRepository
     * @return CadastrarContatoService
     */
    public function setContatoEmailRepository(ContatoEmailRepository $contatoEmailRepository) : CadastrarContatoService
    {
        $this->contatoEmailRepository = $contatoEmailRepository;

        return $this;
    }

    /**
     * Processa os dados e cadastra o contato.
     *
     * @return Contato
     */
    protected function cadastrarContato() : Contato
    {
        $contatoCadastrado = $this->contatoRepository->createContato($this->dados['contato']);

        if(!isset($contatoCadastrado->id))
            throw new Exception("Não foi possível cadastrar o contato. Verifique os dados e tente novamente.");

        return $contatoCadastrado;
    }

    protected function cadastrarEmailContato(Contato $contato) : bool
    {
        $emailCadastrado = $this->contatoEmailRepository->createContatoEmail([
            'email' => $this->dados['email']['email'],
            'princiapl' =>  $this->dados['email']['principal'],
            'contato_id' => $contato->id
            ]);

        if(!isset($emailCadastrado->id))
            throw new Exception("Não foi possível cadastrar o email para o contato {$contato->nome}. Verifique os dados e tente novamente.");

        return true;
    }
}
