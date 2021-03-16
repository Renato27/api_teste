<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Services\NotaEspelho\GerarNotaEspelho\Contracts;

use App\Models\NotaEspelho\NotaEspelho;
use App\Models\ContratoPedido\ContratoPedido;
use App\Repositories\Contracts\NotaEspelhoRepository;

interface GerarNotaEspelhoService
{
    /**
     * Seta a model de NotaEspelho.
     *
     * @param NotaEspelho|null
     * @return GerarNotaEspelhoService
     */
    public function setNotaEspelho(?NotaEspelho $NotaEspelho = null): self;

    /**
     * Seta os dados para NotaEspelho.
     *
     * @param array|null $dados
     * @return GerarNotaEspelhoService;
     */
    public function setDados(?array $dados = null): self;

    /**
     * Seta o contrato pedido.
     *
     * @param ContratoPedido $contratoPedido
     * @return GerarNotaEspelhoService
     */
    public function setContratoPedido(ContratoPedido $contratoPedido) : self;

    /**
     * Seta o repositório de NotaEspelhoRepository.
     *
     * @param NotaEspelhoRepository $NotaEspelhoRepository
     * @return GerarNotaEspelhoService
     */
    public function setNotaEspelhoRepository(NotaEspelhoRepository $NotaEspelhoRepository): self;

    /**
     * Processa os dados.
     *
     * @return bool
     */
    public function handle(): bool;
}
