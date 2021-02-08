<?php

namespace App\Services\NotaEspelho\GerarNotaEspelho\Contracts;

use App\Models\ContratoPedido\ContratoPedido;
use App\Models\NotaEspelho\NotaEspelho;
use App\Repositories\Contracts\NotaEspelhoRepository;

interface GerarNotaEspelhoService
{
    /**
     * Seta a model de NotaEspelho.
     *
     * @param NotaEspelho|null
     * @return GerarNotaEspelhoService
     */
    public function setNotaEspelho(?NotaEspelho $NotaEspelho = null): GerarNotaEspelhoService;

    /**
     * Seta os dados para NotaEspelho.
     *
     * @param array|null $dados
     * @return GerarNotaEspelhoService;
     */
    public function setDados(?array $dados = null): GerarNotaEspelhoService;

    /**
     * Seta o contrato pedido.
     *
     * @param ContratoPedido $contratoPedido
     * @return GerarNotaEspelhoService
     */
    public function setContratoPedido(ContratoPedido $contratoPedido) : GerarNotaEspelhoService;

    /**
     * Seta o repositório de NotaEspelhoRepository.
     *
     * @param NotaEspelhoRepository $NotaEspelhoRepository
     * @return GerarNotaEspelhoService
     */
    public function setNotaEspelhoRepository(NotaEspelhoRepository $NotaEspelhoRepository): GerarNotaEspelhoService;

    /**
     * Processa os dados
     *
     * @return boolean
     */
    public function handle(): bool;
}
