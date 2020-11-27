<?php

namespace App\Services\Contatos\AtualizarContato\Contracts;

use App\Models\Contato\Contato;
use App\Repositories\Contracts\ContatoRepository;

interface AtualizarContatoService
{
    /**
     * Seta um contato a ser atualizado.
     *
     * @param integer $contato
     * @return AtualizarContatoService
     */
    public function setContato(int $contato) : AtualizarContatoService;

    /**
     * Seta os dados a serem atualizados.
     *
     * @param array $dados
     * @return AtualizarContatoService
     */
    public function setDados(array $dados) : AtualizarContatoService;

    /**
     * Seta o repositório de contato.
     *
     * @param ContatoRepository $contatoRepository
     * @return AtualizarContatoService
     */
    public function setContatoRepository(ContatoRepository $contatoRepository) : AtualizarContatoService;

    /**
     * Processa a atualização do contato.
     *
     * @return Contato|null
     */
    public function handle() : ?Contato;
}
