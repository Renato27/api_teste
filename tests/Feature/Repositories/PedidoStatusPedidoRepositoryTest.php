<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace Tests\Feature\Repositories;

use Tests\TestCase;
use App\Models\PedidoStatusPedido\PedidoStatusPedido;
use App\Repositories\Contracts\PedidoStatusPedidoRepository;
use App\Repositories\PedidoStatusPedidoRepositoryImplementation;

class PedidoStatusPedidoRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var PedidoStatusPedidoRepository
     */
    protected PedidoStatusPedidoRepository $implementacao;

    public function __construct()
    {
        $this->implementacao = new PedidoStatusPedidoRepositoryImplementation(new PedidoStatusPedido());
        parent::__construct();
    }

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(PedidoStatusPedidoRepository::class);
    }

    /**
     * Retorna PedidoStatusPedido baseado no ID.
     */
    public function testGetPedidoStatusPedido()
    {
        $pedido = \App\Models\Pedido\Pedido::factory()->create();
        $statusPedido1 = \App\Models\StatusPedido\StatusPedido::factory()->create();
        $statusPedido2 = \App\Models\StatusPedido\StatusPedido::factory()->create();
        $associacao1 = \App\Models\PedidoStatusPedido\PedidoStatusPedido::factory()->create();
        $associacao2 = \App\Models\PedidoStatusPedido\PedidoStatusPedido::factory()->create();

        $associacao1->pedido_id = $pedido->id;
        $associacao1->status_pedido_id = $statusPedido1->id;
        $associacao1->save();

        $associacao2->pedido_id = $pedido->id;
        $associacao2->status_pedido_id = $statusPedido2->id;
        $associacao2->save();

        $retorno = $this->implementacao->getPedidoStatusPedido($pedido->id);

        $this->assertIsInt(2, $retorno);
    }

    /**
     * Retorna uma coleção de PedidoStatusPedido baseado em uma associação.
     */
    public function testGetPedidoStatusPedidos()
    {
        $pedido1 = \App\Models\Pedido\Pedido::factory()->create();
        $pedido2 = \App\Models\Pedido\Pedido::factory()->create();
        $statusPedido = \App\Models\StatusPedido\StatusPedido::factory()->create();
        $associacao1 = \App\Models\PedidoStatusPedido\PedidoStatusPedido::factory()->create();
        $associacao2 = \App\Models\PedidoStatusPedido\PedidoStatusPedido::factory()->create();

        $associacao1->pedido_id = $pedido1->id;
        $associacao1->status_pedido_id = $statusPedido->id;
        $associacao1->save();

        $associacao2->pedido_id = $pedido2->id;
        $associacao2->status_pedido_id = $statusPedido->id;
        $associacao2->save();

        $retorno = $this->implementacao->getPedidoStatusPedidos($statusPedido->id);

        $this->assertIsInt(2, $retorno);
    }

    /**
     * Cria um novo PedidoStatusPedido.
     */
    public function testCreatePedidoStatusPedido()
    {
        $pedido = \App\Models\Pedido\Pedido::factory()->create();
        $statusPedido = \App\Models\StatusPedido\StatusPedido::factory()->create();
        $associacao = \App\Models\PedidoStatusPedido\PedidoStatusPedido::factory()->make();

        $detalhes = [
            'pedido_id' => $pedido->id,
            'status_pedido_id' => $statusPedido->id,
        ];

        $retorno = $this->implementacao->createPedidoStatusPedido($detalhes);

        $associacao->pedido_id = $pedido->id;
        $associacao->status_pedido_id = $statusPedido->id;
        $associacao->save();

        $this->assertEquals($associacao->id - 1, $retorno->id);
    }

    /**
     * Atualiza um PedidoStatusPedido.
     */
    public function testUpdatePedidoStatusPedido()
    {
        $pedido = \App\Models\Pedido\Pedido::factory()->create();
        $statusPedido = \App\Models\StatusPedido\StatusPedido::factory()->create();
        $associacao = \App\Models\PedidoStatusPedido\PedidoStatusPedido::factory()->make();

        $detalhes = [
            'pedido_id' => $pedido->id,
            'status_pedido_id' => $statusPedido->id,
        ];

        $retorno = $this->implementacao->createPedidoStatusPedido($detalhes);

        $this->assertIsInt($retorno->id);
    }

    /**
     * Deleta um PedidoStatusPedido.
     */
    public function testDeletePedidoStatusPedido()
    {
        $pedidoStatusPedido = \App\Models\PedidoStatusPedido\PedidoStatusPedido::factory()->create();

        $retorno = $this->implementacao->deletePedidoStatusPedido($pedidoStatusPedido->id);

        $this->assertDeleted($pedidoStatusPedido, [$retorno]);
    }
}
