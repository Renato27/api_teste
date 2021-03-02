<?php

namespace App\Services\Chamado\AtualizarChamado\Base;

use App\Services\Chamado\AtualizarChamado\Contracts\AtualizarChamadoService;
use App\Models\Chamado\Chamado;
use App\Repositories\Contracts\ChamadoRepository;

abstract class AtualizarChamadoServiceBase implements AtualizarChamadoService
{
    /**
     * Model de Chamado.
     *
     * @var Chamado
     */
    protected Chamado $Chamado;

    /**
     * Array de dados.
     *
     * @var array
     */
    protected array $dados;

    /**
     * Repositório de ChamadoRepository.
     *
     * @var Chamado
     */
    protected ChamadoRepository $ChamadoRepository;

   /**
     * Seta a model de Chamado.
     *
     * @param Chamado
     * @return AtualizarChamadoService
     */
    public function setChamado(Chamado $Chamado): AtualizarChamadoService
    {
        $this->Chamado = $Chamado;
        return $this;
    }

    /**
     * Seta os dados para Chamado.
     *
     * @param array $dados
     * @return AtualizarChamadoService;
     */
    public function setDados(array $dados): AtualizarChamadoService
    {
        $this->dados = $dados;
        return $this;
    }

    /**
     * Seta o repositório de ChamadoRepository.
     *
     * @param ChamadoRepository $ChamadoRepository
     * @return AtualizarChamadoService
     */
    public function setChamadoRepository(ChamadoRepository $ChamadoRepository): AtualizarChamadoService
    {
        $this->ChamadoRepository = $ChamadoRepository;
        return $this;
    }
}
