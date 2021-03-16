<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Services\Chamado\GerarChamado\Contracts;

use App\Models\Chamado\Chamado;
use App\Repositories\Contracts\ChamadoRepository;

interface GerarChamadoService
{
    /**
     * Seta a model de Chamado.
     *
     * @param Chamado|null
     * @return GerarChamadoService
     */
    public function setChamado(?Chamado $Chamado): self;

    /**
     * Seta os dados para gerar o chamado.
     *
     * @param array $dados
     * @return GerarChamadoService
     */
    public function setDados(array $dados) : self;

    /**
     * Seta os patrimônios para gerar o chamado.
     *
     * @param array|null $patrimonios
     * @return GerarChamadoService
     */
    public function setPatrimonios(?array $patrimonios) : self;

    /**
     * Seta os patrimônios para gerar o chamado de troca.
     *
     * @param array|null $patrimonios
     * @return GerarChamadoService
     */
    public function setPatrimoniosTrocar(?array $patrimoniosTrocar) : self;

    /**
     * Seta o repositório de ChamadoRepository.
     *
     * @param ChamadoRepository $ChamadoRepository
     * @return GerarChamadoService
     */
    public function setChamadoRepository(ChamadoRepository $ChamadoRepository): self;

    /**
     * Processa os dados.
     *
     * @return Chamado|null
     */
    public function handle(): ?Chamado;
}
