<?php

namespace App\Services\NotaEspelho\GerarNotaEspelho\Base;

use App\Models\ContratoPedido\ContratoPedido;
use App\Services\NotaEspelho\GerarNotaEspelho\Contracts\GerarNotaEspelhoService;
use App\Models\NotaEspelho\NotaEspelho;
use App\Repositories\Contracts\NotaEspelhoRepository;

abstract class GerarNotaEspelhoServiceBase implements GerarNotaEspelhoService
{
    /**
     * Model de NotaEspelho.
     *
     * @var NotaEspelho|null
     */
    protected ?NotaEspelho $NotaEspelho;

    /**
     * Array de dados.
     *
     * @var array|null
     */
    protected ?array $dados;

    /**
     * COntrato pedido.
     *
     * @var ContratoPedido
     */
    protected ContratoPedido $contratoPedido;

    /**
     * Repositório de NotaEspelhoRepository.
     *
     * @var NotaEspelho
     */
    protected NotaEspelhoRepository $NotaEspelhoRepository;

   /**
     * Seta a model de NotaEspelho.
     *
     * @param NotaEspelho|null
     * @return GerarNotaEspelhoService
     */
    public function setNotaEspelho(?NotaEspelho $NotaEspelho = null): GerarNotaEspelhoService
    {
        $this->NotaEspelho = $NotaEspelho;
        return $this;
    }

    /**
     * Seta o contrato pedido.
     *
     * @param ContratoPedido $contratoPedido
     * @return GerarNotaEspelhoService
     */
    public function setContratoPedido(ContratoPedido $contratoPedido) : GerarNotaEspelhoService
    {
        $this->contratoPedido = $contratoPedido;
        return $this;
    }

    /**
     * Seta os dados para NotaEspelho.
     *
     * @param array|null $dados
     * @return GerarNotaEspelhoService;
     */
    public function setDados(?array $dados = null): GerarNotaEspelhoService
    {
        $this->dados = $dados;
        return $this;
    }

    /**
     * Seta o repositório de NotaEspelhoRepository.
     *
     * @param NotaEspelhoRepository $NotaEspelhoRepository
     * @return GerarNotaEspelhoService
     */
    public function setNotaEspelhoRepository(NotaEspelhoRepository $NotaEspelhoRepository): GerarNotaEspelhoService
    {
        $this->NotaEspelhoRepository = $NotaEspelhoRepository;
        return $this;
    }
}
