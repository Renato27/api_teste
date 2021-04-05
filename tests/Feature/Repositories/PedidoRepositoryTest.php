<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace Tests\Feature\Repositories;

use Tests\TestCase;
use App\Models\Pedido\Pedido;
use App\Repositories\Contracts\PedidoRepository;
use App\Repositories\PedidoRepositoryImplementation;

class PedidoRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var PedidoRepository
     */
    protected PedidoRepository $implementacao;

    public function __construct()
    {
        $this->implementacao = new PedidoRepositoryImplementation(new Pedido());
        parent::__construct();
    }

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(PedidoRepository::class);
    }

    /**
     * Retorna Pedido baseado no ID.
     */
    public function testGetPedido()
    {
        $pedido = \App\Models\Pedido\Pedido::factory()->create();

        $retorno = $this->implementacao->getPedido($pedido->id);

        $this->assertEquals($pedido->id, $retorno->id);
    }

    /**
     * Retorna uma coleção de Pedido baseado em uma associação.
     * ( Inativo no momento, retornando todos os valores da tabela, não necessário teste até o atual momento).
     */
    // public function testGetPedidos()
    // {

    // }

    /**
     * Cria um novo Pedido.
     */
    public function testCreatePedido()
    {
        $pedido = \App\Models\Pedido\Pedido::factory()->make();
        $detalhes = [
            'data_entrega' => $pedido->data_entrega,
            'data_retirada' => $pedido->data_retirada,
        ];

        $retorno = $this->implementacao->createPedido($detalhes);

        $this->assertIsInt($retorno->id);
    }

    /**
     * Atualiza um Pedido.
     */
    public function testUpdatePedido()
    {
        $pedido = \App\Models\Pedido\Pedido::factory()->create();
        $detalhes = [
            'data_entrega' => $pedido->data_entrega,
            'data_retirada' => $pedido->data_retirada,
        ];

        $retorno = $this->implementacao->updatePedido($pedido->id, $detalhes);

        $this->assertIsInt($retorno->id);
    }

    /**
     * Deleta um Pedido.
     */
    public function testDeletePedido()
    {
        $pedido = \App\Models\Pedido\Pedido::factory()->create();

        $retorno = $this->implementacao->deletePedido($pedido->id);

        $this->assertDeleted($pedido, [$retorno]);
    }
}
