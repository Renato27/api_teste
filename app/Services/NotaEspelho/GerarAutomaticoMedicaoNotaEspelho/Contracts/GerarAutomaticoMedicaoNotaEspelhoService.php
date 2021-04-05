<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Services\NotaEspelho\GerarAutomaticoMedicaoNotaEspelho\Contracts;

use App\Models\NotaEspelho\NotaEspelho;
use App\Repositories\Contracts\ContratosRepository;
use App\Repositories\Contracts\NotaEspelhoRepository;
use App\Repositories\Contracts\NotaPatrimonioRepository;
use App\Repositories\Contracts\LancamentoFuturoRepository;
use App\Repositories\Contracts\PatrimonioAlugadoRepository;
use App\Repositories\Contracts\NotaEspelhoPatrimonioRepository;

interface GerarAutomaticoMedicaoNotaEspelhoService
{
    /**
     * Seta a model de NotaEspelho.
     *
     * @param NotaEspelho
     * @return GerarAutomaticoMedicaoNotaEspelhoService
     */
    public function setNotaEspelho(NotaEspelho $NotaEspelho): self;

    /**
     * Seta os dados para NotaEspelho.
     *
     * @param array $dados
     * @return GerarAutomaticoMedicaoNotaEspelhoService;
     */
    public function setDados(array $dados): self;

    /**
     * Seta o repositório de NotaEspelhoRepository.
     *
     * @param NotaEspelhoRepository $NotaEspelhoRepository
     * @return GerarAutomaticoMedicaoNotaEspelhoService
     */
    public function setNotaEspelhoRepository(NotaEspelhoRepository $NotaEspelhoRepository): self;

    /**
     * Seta o repositório de notaPatrimonio.
     *
     * @param NotaPatrimonioRepository $notaPatrimonioRepository
     * @return GerarAutomaticoMedicaoNotaEspelhoService
     */
    public function setNotaPatrimonioRepository(NotaPatrimonioRepository $notaPatrimonioRepository) : self;

    /**
     * Seta o repositório de notaEspelhoPatrimônio.
     *
     * @param NotaEspelhoPatrimonioRepository $notaEspelhoPatrimonioRepository
     * @return GerarAutomaticoMedicaoNotaEspelhoService
     */
    public function setNotaEspelhoPatrimonioRepository(NotaEspelhoPatrimonioRepository $notaEspelhoPatrimonioRepository) : self;

    /**
     * Seta o repositório de patrimonioalugado.
     *
     * @param PatrimonioAlugadoRepository $patrimonioAlugadoRepository
     * @return GerarAutomaticoMedicaoNotaEspelhoService
     */
    public function setPatrimonioAlugadoRepository(PatrimonioAlugadoRepository $patrimonioAlugadoRepository) : self;

    /**
     * Seta o repositório de contrato.
     *
     * @param ContratosRepository $contratosRepository
     * @return GerarAutomaticoMedicaoNotaEspelhoService
     */
    public function setContratoRepository(ContratosRepository $contratosRepository) : self;

    /**
     * Seta o repositório de lançamento futuro.
     *
     * @param LancamentoFuturoRepository $lancamentoFuturoRepository
     * @return GerarAutomaticoMedicaoNotaEspelhoService
     */
    public function setLancamentoFuturoRepository(LancamentoFuturoRepository $lancamentoFuturoRepository) : self;

    /**
     * Processa os dados.
     *
     * @return bool
     */
    public function handle(): bool;
}
