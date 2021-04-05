<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Services\Contatos\ExcluirContato\Abstracts;

use Exception;
use App\Repositories\Contracts\ContatoRepository;
use App\Services\Contatos\ExcluirContato\Contracts\ExcluirContatoService;

abstract class ExcluirContatoServiceAbstract implements ExcluirContatoService
{
    /**
     * ID do contato.
     *
     * @var int
     */
    protected int $contato;

    /**
     * Repositório de contato.
     *
     * @var ContatoRepository
     */
    protected ContatoRepository $contatoRepository;

    /**
     * Seta o contato a ser excluído.
     *
     * @param int $contato
     * @return ExcluirContatoService
     */
    public function setContato(int $contato) : ExcluirContatoService
    {
        $this->contato = $contato;

        return $this;
    }

    /**
     * Seta o repositório de contato.
     *
     * @param ContatoRepository $contatoRepository
     * @return ExcluirContatoService
     */
    public function setContatoRepository(ContatoRepository $contatoRepository) : ExcluirContatoService
    {
        $this->contatoRepository = $contatoRepository;

        return $this;
    }

    protected function excluirContato() : bool
    {
        $contato = $this->contatoRepository->getContato($this->contato);

        if (! isset($contato->id)) {
            throw new Exception('O contato a ser excluído não existe.');
        }

        $contatoExcluído = $this->contatoRepository->deleteContato($contato->id);

        if (! $contatoExcluído) {
            throw new Exception('Não foi possivel excluir o contato solicitado.');
        }

        return $contatoExcluído;
    }
}
