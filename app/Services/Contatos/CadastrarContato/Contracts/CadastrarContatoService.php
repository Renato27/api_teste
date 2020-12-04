<?php

namespace App\Services\Contatos\CadastrarContato\Contracts;

use App\Models\Contato\Contato;
use App\Repositories\Contracts\ContatoEmailRepository;
use App\Repositories\Contracts\ContatoRepository;

interface CadastrarContatoService
{
    /**
     * Seta os dados para cadastrar um contato.
     *
     * @param array $dados
     * @return CadastrarContatoService
     */
    public function setDados(array $dados) : CadastrarContatoService;

    /**
     * Seta o repositório de contato.
     *
     * @param ContatoRepository $contatoRepository
     * @return CadastrarContatoService
     */
    public function setContatoRepository(ContatoRepository $contatoRepository) : CadastrarContatoService;

    /**
     * Seta o repositório de contato email.
     *
     * @param ContatoEmailRepository $contatoEmailRepository
     * @return CadastrarContatoService
     */
    public function setContatoEmailRepository(ContatoEmailRepository $contatoEmailRepository) : CadastrarContatoService;

    /**
     * Processa os dados para cadastrar um contato.
     *
     * @return Contato
     */
    public function handle() : ?Contato;
}
