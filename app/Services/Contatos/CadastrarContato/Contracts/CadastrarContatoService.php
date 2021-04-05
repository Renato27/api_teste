<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Services\Contatos\CadastrarContato\Contracts;

use App\Models\Contato\Contato;
use App\Repositories\Contracts\ContatoRepository;
use App\Repositories\Contracts\ContatoEmailRepository;

interface CadastrarContatoService
{
    /**
     * Seta os dados para cadastrar um contato.
     *
     * @param array $dados
     * @return CadastrarContatoService
     */
    public function setDados(array $dados) : self;

    /**
     * Seta o repositório de contato.
     *
     * @param ContatoRepository $contatoRepository
     * @return CadastrarContatoService
     */
    public function setContatoRepository(ContatoRepository $contatoRepository) : self;

    /**
     * Seta o repositório de contato email.
     *
     * @param ContatoEmailRepository $contatoEmailRepository
     * @return CadastrarContatoService
     */
    public function setContatoEmailRepository(ContatoEmailRepository $contatoEmailRepository) : self;

    /**
     * Processa os dados para cadastrar um contato.
     *
     * @return Contato
     */
    public function handle() : ?Contato;
}
