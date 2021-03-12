<?php

namespace App\Services\NotaEspelho\GerarAutomaticoMedicaoNotaEspelho\Contracts;

use App\Models\NotaEspelho\NotaEspelho;
use App\Repositories\Contracts\ContratosRepository;
use App\Repositories\Contracts\NotaEspelhoRepository;
use App\Repositories\Contracts\NotaPatrimonioRepository;
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
    public function setNotaEspelho(NotaEspelho $NotaEspelho): GerarAutomaticoMedicaoNotaEspelhoService;

    /**
     * Seta os dados para NotaEspelho.
     *
     * @param array $dados
     * @return GerarAutomaticoMedicaoNotaEspelhoService;
     */
    public function setDados(array $dados): GerarAutomaticoMedicaoNotaEspelhoService;

    /**
     * Seta o repositório de NotaEspelhoRepository.
     *
     * @param NotaEspelhoRepository $NotaEspelhoRepository
     * @return GerarAutomaticoMedicaoNotaEspelhoService
     */
    public function setNotaEspelhoRepository(NotaEspelhoRepository $NotaEspelhoRepository): GerarAutomaticoMedicaoNotaEspelhoService;

    /**
     * Seta o repositório de notaPatrimonio.
     *
     * @param NotaPatrimonioRepository $notaPatrimonioRepository
     * @return GerarAutomaticoMedicaoNotaEspelhoService
     */
    public function setNotaPatrimonioRepository(NotaPatrimonioRepository $notaPatrimonioRepository) : GerarAutomaticoMedicaoNotaEspelhoService;

    /**
     * Seta o repositório de notaEspelhoPatrimônio.
     *
     * @param NotaEspelhoPatrimonioRepository $notaEspelhoPatrimonioRepository
     * @return GerarAutomaticoMedicaoNotaEspelhoService
     */
    public function setNotaEspelhoPatrimonioRepository(NotaEspelhoPatrimonioRepository $notaEspelhoPatrimonioRepository) : GerarAutomaticoMedicaoNotaEspelhoService;

    /**
     * Seta o repositório de patrimonioalugado.
     *
     * @param PatrimonioAlugadoRepository $patrimonioAlugadoRepository
     * @return GerarAutomaticoMedicaoNotaEspelhoService
     */
    public function setPatrimonioAlugadoRepository(PatrimonioAlugadoRepository $patrimonioAlugadoRepository) : GerarAutomaticoMedicaoNotaEspelhoService;

    /**
     * Seta o repositório de contrato.
     *
     * @param ContratosRepository $contratosRepository
     * @return GerarAutomaticoMedicaoNotaEspelhoService
     */
    public function setContratoRepository(ContratosRepository $contratosRepository) : GerarAutomaticoMedicaoNotaEspelhoService;

    /**
     * Processa os dados
     *
     * @return boolean
     */
    public function handle(): bool;
}
