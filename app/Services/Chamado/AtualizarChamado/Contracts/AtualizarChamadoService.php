<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Services\Chamado\AtualizarChamado\Contracts;

use App\Models\Chamado\Chamado;
use App\Repositories\Contracts\ChamadoRepository;

interface AtualizarChamadoService
{
    /**
     * Seta a model de Chamado.
     *
     * @param Chamado
     * @return AtualizarChamadoService
     */
    public function setChamado(Chamado $Chamado): self;

    /**
     * Seta os dados para Chamado.
     *
     * @param array $dados
     * @return AtualizarChamadoService;
     */
    public function setDados(array $dados): self;

    /**
     * Seta os patrimônios para adicionar no chamado.
     *
     * @param int $patrimonio_adicionar
     * @return AtualizarChamadoService
     */
    public function setPatrimoniosAdicionar(int $patrimonio_adicionar): self;

    /**
     * Seta os patrimônios para retirar no chamado.
     *
     * @param int $patrimonio_retirar
     * @return AtualizarChamadoService
     */
    public function setPatrimoniosRetirar(int $patrimonio_retirar): self;

    /**
     * Seta os dados para adicionar uma interação no chamado de suporte.
     *
     * @param array $dadosInteracoes
     * @return AtualizarChamadoService
     */
    public function setSuporteInteracoes(array $dadosInteracoes): self;

    /**
     * Seta o valor para atualizar o contador.
     *
     * @param array $dadosContador
     * @return AtualizarChamadoService
     */
    public function setContadorDados(array $dadosContador): self;

    /**
     * Seta o repositório de ChamadoRepository.
     *
     * @param ChamadoRepository $ChamadoRepository
     * @return AtualizarChamadoService
     */
    public function setChamadoRepository(ChamadoRepository $ChamadoRepository): self;

    /**
     * Processa os dados.
     *
     * @return bool
     */
    public function handle(): ?Chamado;
}
