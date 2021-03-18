<?php

namespace App\Services\Nota\GerarNota\Base;

use App\Services\Nota\GerarNota\Contracts\GerarNotaService;
use App\Models\Nota\Nota;
use App\Repositories\Contracts\NotaRepository;

abstract class GerarNotaServiceBase implements GerarNotaService
{
    /**
     * Model de Nota.
     *
     * @var Nota
     */
    protected Nota $Nota;

    /**
     * Array de dados.
     *
     * @var array
     */
    protected array $dados;

    /**
     * Repositório de NotaRepository.
     *
     * @var Nota
     */
    protected NotaRepository $NotaRepository;

   /**
     * Seta a model de Nota.
     *
     * @param Nota
     * @return GerarNotaService
     */
    public function setNota(Nota $Nota): GerarNotaService
    {
        $this->Nota = $Nota;
        return $this;
    }

    /**
     * Seta os dados para Nota.
     *
     * @param array $dados
     * @return GerarNotaService;
     */
    public function setDados(array $dados): GerarNotaService
    {
        $this->dados = $dados;
        return $this;
    }

    /**
     * Seta o repositório de NotaRepository.
     *
     * @param NotaRepository $NotaRepository
     * @return GerarNotaService
     */
    public function setNotaRepository(NotaRepository $NotaRepository): GerarNotaService
    {
        $this->NotaRepository = $NotaRepository;
        return $this;
    }
}
