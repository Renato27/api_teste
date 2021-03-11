<?php

namespace App\Services\NotaEspelho\GerarAutomaticoNotaEspelho\Contracts;

use App\Models\NotaEspelho\NotaEspelho;
use App\Repositories\Contracts\EspelhoRecorrentePatrimonioRepository;
use App\Repositories\Contracts\EspelhoRecorrenteRepository;
use App\Repositories\Contracts\NotaEspelhoPatrimonioRepository;
use App\Repositories\Contracts\NotaEspelhoRepository;
use App\Repositories\Contracts\NotaPatrimonioRepository;
use App\Repositories\Contracts\PatrimonioAlugadoRepository;

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
     * Seta o repositório de EspelhoRecorrente.
     *
     * @param EspelhoRecorrenteRepository $espelhoRecorrenteRepository
     * @return GerarAutomaticoNotaEspelhoService
     */
    public function setEspelhoRecorrenteRepository(EspelhoRecorrenteRepository $espelhoRecorrenteRepository) : GerarAutomaticoNotaEspelhoService;

    /**
     * Seta o repositório de espelhoRecorrentePatrimonio
     *
     * @param EspelhoRecorrentePatrimonioRepository $espelhoRecorrentePatrimonioRepository
     * @return GerarAutomaticoNotaEspelhoService
     */
    public function setEspelhoRecorrentePatrimonioRepository(EspelhoRecorrentePatrimonioRepository $espelhoRecorrentePatrimonioRepository) : GerarAutomaticoNotaEspelhoService;

    /**
     * Seta o repositório de notaPatrimonio.
     *
     * @param NotaPatrimonioRepository $notaPatrimonioRepository
     * @return GerarAutomaticoNotaEspelhoService
     */
    public function setNotaPatrimonioRepository(NotaPatrimonioRepository $notaPatrimonioRepository) : GerarAutomaticoNotaEspelhoService;

    /**
     * Seta o repositório de notaEspelhoPatrimônio.
     *
     * @param NotaEspelhoPatrimonioRepository $notaEspelhoPatrimonioRepository
     * @return GerarAutomaticoNotaEspelhoService
     */
    public function setNotaEspelhoPatrimonioRepository(NotaEspelhoPatrimonioRepository $notaEspelhoPatrimonioRepository) : GerarAutomaticoNotaEspelhoService;

    /**
     * Seta o repositório de patrimonioalugado.
     *
     * @param PatrimonioAlugadoRepository $patrimonioAlugadoRepository
     * @return GerarAutomaticoNotaEspelhoService
     */
    public function setPatrimonioAlugadoRepository(PatrimonioAlugadoRepository $patrimonioAlugadoRepository) : GerarAutomaticoNotaEspelhoService;

    /**
     * Processa os dados
     *
     * @return boolean
     */
    public function handle(): bool;
}
