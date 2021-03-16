<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Services\Contatos\AtualizarContato\Contracts;

use App\Models\Contato\Contato;
use App\Repositories\Contracts\ContatoRepository;

interface AtualizarContatoService
{
    /**
     * Seta um contato a ser atualizado.
     *
     * @param int $contato
     * @return AtualizarContatoService
     */
    public function setContato(int $contato) : self;

    /**
     * Seta os dados a serem atualizados.
     *
     * @param array $dados
     * @return AtualizarContatoService
     */
    public function setDados(array $dados) : self;

    /**
     * Seta o repositório de contato.
     *
     * @param ContatoRepository $contatoRepository
     * @return AtualizarContatoService
     */
    public function setContatoRepository(ContatoRepository $contatoRepository) : self;

    /**
     * Processa a atualização do contato.
     *
     * @return Contato|null
     */
    public function handle() : ?Contato;
}
