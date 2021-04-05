<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Services\Contatos\ExcluirContato\Contracts;

use App\Repositories\Contracts\ContatoRepository;

interface ExcluirContatoService
{
    /**
     * Seta o contato a ser excluído.
     *
     * @param int $contato
     * @return ExcluirContatoService
     */
    public function setContato(int $contato) : self;

    /**
     * Seta o repositório de contato.
     *
     * @param ContatoRepository $contatoRepository
     * @return ExcluirContatoService
     */
    public function setContatoRepository(ContatoRepository $contatoRepository) : self;

    /**
     * Processa a exclusão do contato.
     *
     * @return bool
     */
    public function handle() : bool;
}
