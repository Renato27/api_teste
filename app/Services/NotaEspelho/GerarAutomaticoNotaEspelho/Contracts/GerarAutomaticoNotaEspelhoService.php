<?php

namespace App\Services\NotaEspelho\GerarAutomaticoNotaEspelho\Contracts;

use App\Models\NotaEspelho\NotaEspelho;
use App\Repositories\Contracts\NotaEspelhoRepository;

interface GerarAutomaticoNotaEspelhoService
{
    /**
     * Seta a model de NotaEspelho.
     *
     * @param NotaEspelho
     * @return GerarAutomaticoNotaEspelhoService
     */
    public function setNotaEspelho(NotaEspelho $NotaEspelho): GerarAutomaticoNotaEspelhoService;

    /**
     * Seta os dados para NotaEspelho.
     *
     * @param array $dados
     * @return GerarAutomaticoNotaEspelhoService;
     */
    public function setDados(array $dados): GerarAutomaticoNotaEspelhoService;

    /**
     * Seta o repositório de NotaEspelhoRepository.
     *
     * @param NotaEspelhoRepository $NotaEspelhoRepository
     * @return GerarAutomaticoNotaEspelhoService
     */
    public function setNotaEspelhoRepository(NotaEspelhoRepository $NotaEspelhoRepository): GerarAutomaticoNotaEspelhoService;

    /**
     * Processa os dados
     *
     * @return boolean
     */
    public function handle(): bool;
}
