<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

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
    public function setNota(Nota $Nota): self;

    /**
     * Seta os dados para Nota.
     *
     * @param array $dados
     * @return GerarNotaService;
     */
    public function setDados(array $dados): self;

    /**
     * Seta o repositório de NotaRepository.
     *
     * @param NotaRepository $NotaRepository
     * @return GerarNotaService
     */
    public function setNotaRepository(NotaRepository $NotaRepository): self;

    /**
     * Processa os dados.
     *
     * @return bool
     */
    public function handle(): ?Nota;
}
