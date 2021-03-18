<?php

namespace App\Services\Nota\GerarNota\Contracts;

use App\Models\Nota\Nota;
use App\Repositories\Contracts\NotaRepository;

interface GerarNotaService
{
    /**
     * Seta a model de Nota.
     *
     * @param Nota
     * @return GerarNotaService
     */
    public function setNota(Nota $Nota): GerarNotaService;

    /**
     * Seta os dados para Nota.
     *
     * @param array $dados
     * @return GerarNotaService;
     */
    public function setDados(array $dados): GerarNotaService;

    /**
     * Seta o repositório de NotaRepository.
     *
     * @param NotaRepository $NotaRepository
     * @return GerarNotaService
     */
    public function setNotaRepository(NotaRepository $NotaRepository): GerarNotaService;

    /**
     * Processa os dados
     *
     * @return boolean
     */
    public function handle(): ?Nota;
}
