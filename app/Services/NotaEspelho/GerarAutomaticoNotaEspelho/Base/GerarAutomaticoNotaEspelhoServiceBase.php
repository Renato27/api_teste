<?php

namespace App\Services\NotaEspelho\GerarAutomaticoNotaEspelho\Base;

use App\Services\NotaEspelho\GerarAutomaticoNotaEspelho\Contracts\GerarAutomaticoNotaEspelhoService;
use App\Models\NotaEspelho\NotaEspelho;
use App\Repositories\Contracts\NotaEspelhoRepository;

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
}
