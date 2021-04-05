<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Services\Contatos\AtualizarContato\Abstracts;

use Exception;
use App\Models\Contato\Contato;
use App\Repositories\Contracts\ContatoRepository;
use App\Services\Contatos\AtualizarContato\Contracts\AtualizarContatoService;

abstract class AtualizarContatoServiceAbstract implements AtualizarContatoService
{
    /**
     * Dados a serem atualizados.
     *
     * @var array
     */
    protected array $dados;

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
     * Seta um contato a ser atualizado.
     *
     * @param int $contato
     * @return AtualizarContatoService
     */
    public function setContato(int $contato) : AtualizarContatoService
    {
        $this->contato = $contato;

        return $this;
    }

    /**
     * Seta os dados a serem atualizados.
     *
     * @param array $dados
     * @return AtualizarContatoService
     */
    public function setDados(array $dados) : AtualizarContatoService
    {
        $this->dados = $dados;

        return $this;
    }

    /**
     * Seta o repositório de contato.
     *
     * @param ContatoRepository $contatoRepository
     * @return AtualizarContatoService
     */
    public function setContatoRepository(ContatoRepository $contatoRepository) : AtualizarContatoService
    {
        $this->contatoRepository = $contatoRepository;

        return $this;
    }

    /**
     * Processa os dados para atualizar um contato.
     *
     * @return Contato
     */
    protected function atualizarContato() : Contato
    {
        $contato = $this->contatoRepository->getContato($this->contato);

        if (! isset($contato->id)) {
            throw new Exception('O contato solicitado para atualização não existe');
        }

        $contatoAtualizado = $this->contatoRepository->updateContato($contato->id, $this->dados);

        if (! isset($contatoAtualizado->id)) {
            throw new Exception('Não foi possivel atualizar o contato solicitado. Revise os dados e tente novamente');
        }

        return $contatoAtualizado;
    }
}
