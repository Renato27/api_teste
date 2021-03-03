<?php

namespace App\Services\Entrega\CadastrarEntrega\Contracts;

use App\Models\Entrega\Entrega;
use App\Models\Expedicao\Expedicao;
use App\Repositories\Contracts\EntregaRepository;

interface CadastrarEntregaService
{
    /**
     * Seta a model de Entrega.
     *
     * @param Entrega
     * @return CadastrarEntregaService
     */
    public function setExpedicao(Expedicao $expedicao): CadastrarEntregaService;

    /**
     * Seta os patrimõnios da entrega.
     *
     * @param array $patrimonios
     * @return CadastrarEntregaService
     */
    public function setPatrimonios(array $patrimonios): CadastrarEntregaService;

    /**
     * Seta o item de um pedido.
     *
     * @param array $item_pedido
     * @return CadastrarEntregaService
     */
    public function setItemPedido(int $item_pedido) : CadastrarEntregaService;

    /**
     * Seta o repositório de EntregaRepository.
     *
     * @param EntregaRepository $EntregaRepository
     * @return CadastrarEntregaService
     */
    public function setEntregaRepository(EntregaRepository $EntregaRepository): CadastrarEntregaService;

    /**
     * Processa os dados
     *
     * @return boolean
     */
    public function handle(): bool;
}
