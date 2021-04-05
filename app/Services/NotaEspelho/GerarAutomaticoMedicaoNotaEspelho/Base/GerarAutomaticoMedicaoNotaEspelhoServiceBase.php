<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Services\NotaEspelho\GerarAutomaticoMedicaoNotaEspelho\Base;

use App\Models\NotaEspelho\NotaEspelho;
use App\Repositories\Contracts\ContratosRepository;
use App\Repositories\Contracts\NotaEspelhoRepository;
use App\Repositories\Contracts\NotaPatrimonioRepository;
use App\Repositories\Contracts\LancamentoFuturoRepository;
use App\Repositories\Contracts\PatrimonioAlugadoRepository;
use App\Repositories\Contracts\NotaEspelhoPatrimonioRepository;
use App\Services\NotaEspelho\GerarAutomaticoMedicaoNotaEspelho\Contracts\GerarAutomaticoMedicaoNotaEspelhoService;

abstract class GerarAutomaticoMedicaoNotaEspelhoServiceBase implements GerarAutomaticoMedicaoNotaEspelhoService
{
    /**
     * Model de NotaEspelho.
     *
     * @var NotaEspelho
     */
    protected NotaEspelho $NotaEspelho;

    /**
     * Array de dados.
     *
     * @var array
     */
    protected array $dados;

    /**
     * Repositório de NotaEspelhoRepository.
     *
     * @var NotaEspelho
     */
    protected NotaEspelhoRepository $NotaEspelhoRepository;

    /**
     * Repositório de espelhoRecorrente;.
     *
     * @var ContratosRepository
     */
    protected ContratosRepository $contrato_repository;

    /**
     * Repositório de notaPatrimonio;.
     *
     * @var NotaPatrimonioRepository
     */
    protected NotaPatrimonioRepository $nota_patrimonio_repository;

    /**
     * Repositório de notaEspelhoPatrimonio;.
     *
     * @var NotaEspelhoPatrimonioRepository
     */
    protected NotaEspelhoPatrimonioRepository $nota_espelho_patrimonio_repository;

    /**
     * Repositório de patrimonioAlugado;.
     *
     * @var PatrimonioAlugadoRepository
     */
    protected PatrimonioAlugadoRepository $patrimonio_alugado_repository;

    /**
     * Repositório de lancamentoFuturo;.
     *
     * @var LancamentoFuturoRepository
     */
    protected LancamentoFuturoRepository $lancamentoFuturoRepository;

    /**
     * Seta a model de NotaEspelho.
     *
     * @param NotaEspelho
     * @return GerarAutomaticoNotaEspelhoService
     */
    public function setNotaEspelho(NotaEspelho $NotaEspelho): GerarAutomaticoMedicaoNotaEspelhoService
    {
        $this->NotaEspelho = $NotaEspelho;

        return $this;
    }

    /**
     * Seta os dados para NotaEspelho.
     *
     * @param array $dados
     * @return GerarAutomaticoNotaEspelhoService;
     */
    public function setDados(array $dados): GerarAutomaticoMedicaoNotaEspelhoService
    {
        $this->dados = $dados;

        return $this;
    }

    /**
     * Seta o repositório de NotaEspelhoRepository.
     *
     * @param NotaEspelhoRepository $NotaEspelhoRepository
     * @return GerarAutomaticoNotaEspelhoService
     */
    public function setNotaEspelhoRepository(NotaEspelhoRepository $NotaEspelhoRepository): GerarAutomaticoMedicaoNotaEspelhoService
    {
        $this->NotaEspelhoRepository = $NotaEspelhoRepository;

        return $this;
    }

    /**
     * Seta o repositório de notaPatrimonio.
     *
     * @param NotaPatrimonioRepository $notaPatrimonioRepository
     * @return GerarAutomaticoNotaEspelhoService
     */
    public function setNotaPatrimonioRepository(NotaPatrimonioRepository $notaPatrimonioRepository) : GerarAutomaticoMedicaoNotaEspelhoService
    {
        $this->nota_patrimonio_repository = $notaPatrimonioRepository;

        return $this;
    }

    /**
     * Seta o repositório de notaEspelhoPatrimônio.
     *
     * @param NotaEspelhoPatrimonioRepository $notaEspelhoPatrimonioRepository
     * @return GerarAutomaticoNotaEspelhoService
     */
    public function setNotaEspelhoPatrimonioRepository(NotaEspelhoPatrimonioRepository $notaEspelhoPatrimonioRepository) : GerarAutomaticoMedicaoNotaEspelhoService
    {
        $this->nota_espelho_patrimonio_repository = $notaEspelhoPatrimonioRepository;

        return $this;
    }

    /**
     * Seta o repositório de patrimonioalugado.
     *
     * @param PatrimonioAlugadoRepository $patrimonioAlugadoRepository
     * @return GerarAutomaticoNotaEspelhoService
     */
    public function setPatrimonioAlugadoRepository(PatrimonioAlugadoRepository $patrimonioAlugadoRepository) : GerarAutomaticoMedicaoNotaEspelhoService
    {
        $this->patrimonio_alugado_repository = $patrimonioAlugadoRepository;

        return $this;
    }

    /**
     * Seta o repositório de contrato.
     *
     * @param ContratosRepository $contratosRepository
     * @return GerarAutomaticoMedicaoNotaEspelhoService
     */
    public function setContratoRepository(ContratosRepository $contratosRepository) : GerarAutomaticoMedicaoNotaEspelhoService
    {
        $this->contrato_repository = $contratosRepository;

        return $this;
    }

    /**
     * Seta o repositório de lançamento futuro.
     *
     * @param LancamentoFuturoRepository $lancamentoFuturoRepository
     * @return GerarAutomaticoMedicaoNotaEspelhoService
     */
    public function setLancamentoFuturoRepository(LancamentoFuturoRepository $lancamentoFuturoRepository) : GerarAutomaticoMedicaoNotaEspelhoService
    {
        $this->lancamentoFuturoRepository = $lancamentoFuturoRepository;

        return $this;
    }
}
