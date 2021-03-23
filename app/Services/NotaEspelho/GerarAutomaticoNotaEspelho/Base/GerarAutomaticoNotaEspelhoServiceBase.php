<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Services\NotaEspelho\GerarAutomaticoNotaEspelho\Base;

use App\Models\NotaEspelho\NotaEspelho;
use App\Repositories\Contracts\NotaEspelhoRepository;
use App\Repositories\Contracts\NotaPatrimonioRepository;
use App\Repositories\Contracts\LancamentoFuturoRepository;
use App\Repositories\Contracts\EspelhoRecorrenteRepository;
use App\Repositories\Contracts\PatrimonioAlugadoRepository;
use App\Repositories\Contracts\NotaEspelhoPatrimonioRepository;
use App\Repositories\Contracts\EspelhoRecorrentePatrimonioRepository;
use App\Services\NotaEspelho\GerarAutomaticoNotaEspelho\Contracts\GerarAutomaticoNotaEspelhoService;

abstract class GerarAutomaticoNotaEspelhoServiceBase implements GerarAutomaticoNotaEspelhoService
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
     * @var EspelhoRecorrenteRepository
     */
    protected EspelhoRecorrenteRepository $espelho_recorrente_repository;

    /**
     * Repositório de espelhoRecorrentePatrimonio;.
     *
     * @var EspelhoRecorrentePatrimonioRepository
     */
    protected EspelhoRecorrentePatrimonioRepository $espelho_recorrente_patrimonio_repository;

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
    public function setNotaEspelho(NotaEspelho $NotaEspelho): GerarAutomaticoNotaEspelhoService
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
    public function setDados(array $dados): GerarAutomaticoNotaEspelhoService
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
    public function setNotaEspelhoRepository(NotaEspelhoRepository $NotaEspelhoRepository): GerarAutomaticoNotaEspelhoService
    {
        $this->NotaEspelhoRepository = $NotaEspelhoRepository;

        return $this;
    }

    /**
     * Seta o repositório de EspelhoRecorrente.
     *
     * @param EspelhoRecorrenteRepository $espelhoRecorrenteRepository
     * @return GerarAutomaticoNotaEspelhoService
     */
    public function setEspelhoRecorrenteRepository(EspelhoRecorrenteRepository $espelhoRecorrenteRepository) : GerarAutomaticoNotaEspelhoService
    {
        $this->espelho_recorrente_repository = $espelhoRecorrenteRepository;

        return $this;
    }

    /**
     * Seta o repositório de espelhoRecorrentePatrimonio.
     *
     * @param EspelhoRecorrentePatrimonioRepository $espelhoRecorrentePatrimonioRepository
     * @return GerarAutomaticoNotaEspelhoService
     */
    public function setEspelhoRecorrentePatrimonioRepository(EspelhoRecorrentePatrimonioRepository $espelhoRecorrentePatrimonioRepository) : GerarAutomaticoNotaEspelhoService
    {
        $this->espelho_recorrente_patrimonio_repository = $espelhoRecorrentePatrimonioRepository;

        return $this;
    }

    /**
     * Seta o repositório de notaPatrimonio.
     *
     * @param NotaPatrimonioRepository $notaPatrimonioRepository
     * @return GerarAutomaticoNotaEspelhoService
     */
    public function setNotaPatrimonioRepository(NotaPatrimonioRepository $notaPatrimonioRepository) : GerarAutomaticoNotaEspelhoService
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
    public function setNotaEspelhoPatrimonioRepository(NotaEspelhoPatrimonioRepository $notaEspelhoPatrimonioRepository) : GerarAutomaticoNotaEspelhoService
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
    public function setPatrimonioAlugadoRepository(PatrimonioAlugadoRepository $patrimonioAlugadoRepository) : GerarAutomaticoNotaEspelhoService
    {
        $this->patrimonio_alugado_repository = $patrimonioAlugadoRepository;

        return $this;
    }

    /**
     * Seta o repositório de lançamento futuro.
     *
     * @param LancamentoFuturoRepository $lancamentoFuturoRepository
     * @return GerarAutomaticoNotaEspelhoService
     */
    public function setLancamentoFuturoRepository(LancamentoFuturoRepository $lancamentoFuturoRepository) : GerarAutomaticoNotaEspelhoService
    {
        $this->lancamentoFuturoRepository = $lancamentoFuturoRepository;

        return $this;
    }
}
