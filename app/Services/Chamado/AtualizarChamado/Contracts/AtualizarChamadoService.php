<?php

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
    public function setChamado(Chamado $Chamado): AtualizarChamadoService;

    /**
     * Seta os dados para Chamado.
     *
     * @param array $dados
     * @return AtualizarChamadoService;
     */
    public function setDados(array $dados): AtualizarChamadoService;

    /**
     * Seta os patrimônios para adicionar no chamado.
     *
     * @param integer $patrimonio_adicionar
     * @return AtualizarChamadoService
     */
    public function setPatrimoniosAdicionar(int $patrimonio_adicionar): AtualizarChamadoService;

    /**
     * Seta os patrimônios para retirar no chamado.
     *
     * @param integer $patrimonio_retirar
     * @return AtualizarChamadoService
     */
    public function setPatrimoniosRetirar(int $patrimonio_retirar): AtualizarChamadoService;

    /**
     * Seta os dados para adicionar uma interação no chamado de suporte.
     *
     * @param array $dadosInteracoes
     * @return AtualizarChamadoService
     */
    public function setSuporteInteracoes(array $dadosInteracoes): AtualizarChamadoService;

    /**
     * Seta o valor para atualizar o contador.
     *
     * @param array $dadosContador
     * @return AtualizarChamadoService
     */
    public function setContadorDados(array $dadosContador): AtualizarChamadoService;

    /**
     * Seta o repositório de ChamadoRepository.
     *
     * @param ChamadoRepository $ChamadoRepository
     * @return AtualizarChamadoService
     */
    public function setChamadoRepository(ChamadoRepository $ChamadoRepository): AtualizarChamadoService;

    /**
     * Processa os dados
     *
     * @return boolean
     */
    public function handle(): ?Chamado;
}
