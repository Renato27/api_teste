<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Services\NotaEspelho\GerarAutomaticoNotaEspelho\Contracts;

use App\Models\NotaEspelho\NotaEspelho;
use App\Repositories\Contracts\NotaEspelhoRepository;
use App\Repositories\Contracts\NotaPatrimonioRepository;
use App\Repositories\Contracts\LancamentoFuturoRepository;
use App\Repositories\Contracts\EspelhoRecorrenteRepository;
use App\Repositories\Contracts\PatrimonioAlugadoRepository;
use App\Repositories\Contracts\NotaEspelhoPatrimonioRepository;
use App\Repositories\Contracts\EspelhoRecorrentePatrimonioRepository;

interface GerarAutomaticoNotaEspelhoService
{
    /**
     * Seta a model de NotaEspelho.
     *
     * @param NotaEspelho
     * @return GerarAutomaticoNotaEspelhoService
     */
    public function setNotaEspelho(NotaEspelho $NotaEspelho): self;

    /**
     * Seta os dados para NotaEspelho.
     *
     * @param array $dados
     * @return GerarAutomaticoNotaEspelhoService;
     */
    public function setDados(array $dados): self;

    /**
     * Seta o repositório de NotaEspelhoRepository.
     *
     * @param NotaEspelhoRepository $NotaEspelhoRepository
     * @return GerarAutomaticoNotaEspelhoService
     */
    public function setNotaEspelhoRepository(NotaEspelhoRepository $NotaEspelhoRepository): self;

    /**
     * Seta o repositório de EspelhoRecorrente.
     *
     * @param EspelhoRecorrenteRepository $espelhoRecorrenteRepository
     * @return GerarAutomaticoNotaEspelhoService
     */
    public function setEspelhoRecorrenteRepository(EspelhoRecorrenteRepository $espelhoRecorrenteRepository) : self;

    /**
     * Seta o repositório de espelhoRecorrentePatrimonio.
     *
     * @param EspelhoRecorrentePatrimonioRepository $espelhoRecorrentePatrimonioRepository
     * @return GerarAutomaticoNotaEspelhoService
     */
    public function setEspelhoRecorrentePatrimonioRepository(EspelhoRecorrentePatrimonioRepository $espelhoRecorrentePatrimonioRepository) : self;

    /**
     * Seta o repositório de notaPatrimonio.
     *
     * @param NotaPatrimonioRepository $notaPatrimonioRepository
     * @return GerarAutomaticoNotaEspelhoService
     */
    public function setNotaPatrimonioRepository(NotaPatrimonioRepository $notaPatrimonioRepository) : self;

    /**
     * Seta o repositório de notaEspelhoPatrimônio.
     *
     * @param NotaEspelhoPatrimonioRepository $notaEspelhoPatrimonioRepository
     * @return GerarAutomaticoNotaEspelhoService
     */
    public function setNotaEspelhoPatrimonioRepository(NotaEspelhoPatrimonioRepository $notaEspelhoPatrimonioRepository) : self;

    /**
     * Seta o repositório de patrimonioalugado.
     *
     * @param PatrimonioAlugadoRepository $patrimonioAlugadoRepository
     * @return GerarAutomaticoNotaEspelhoService
     */
    public function setPatrimonioAlugadoRepository(PatrimonioAlugadoRepository $patrimonioAlugadoRepository) : self;

    /**
     * Seta o repositório de lançamento futuro.
     *
     * @param LancamentoFuturoRepository $lancamentoFuturoRepository
     * @return GerarAutomaticoNotaEspelhoService
     */
    public function setLancamentoFuturoRepository(LancamentoFuturoRepository $lancamentoFuturoRepository) : self;

    /**
     * Processa os dados.
     *
     * @return bool
     */
    public function handle(): bool;
}
