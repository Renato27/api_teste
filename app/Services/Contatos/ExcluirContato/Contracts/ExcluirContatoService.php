<?php

namespace App\Services\Contatos\ExcluirContato\Contracts;

use App\Repositories\Contracts\ContatoRepository;

interface ExcluirContatoService
{
    /**
     * Seta o contato a ser excluído.
     *
     * @param integer $contato
     * @return ExcluirContatoService
     */
    public function setContato(int $contato) : ExcluirContatoService;

    /**
     * Seta o repositório de contato.
     *
     * @param ContatoRepository $contatoRepository
     * @return ExcluirContatoService
     */
    public function setContatoRepository(ContatoRepository $contatoRepository) : ExcluirContatoService;

    /**
     * Processa a exclusão do contato.
     *
     * @return boolean
     */
    public function handle() : bool;
}
