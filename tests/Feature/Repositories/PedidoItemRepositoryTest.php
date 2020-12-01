<?php

namespace Tests\Feature\Repositories;

use App\Models\PedidoItem\PedidoItem;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Repositories\Contracts\PedidoItemRepository;
use App\Repositories\PedidoItemRepositoryImplementation;

class PedidoItemRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var PedidoItemRepository
     */
    protected PedidoItemRepository $implementacao;

    public function __construct()
    {
        $this->implementacao = new PedidoItemRepositoryImplementation(new PedidoItem());
        parent::__construct();
    }

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(PedidoItemRepository::class);
    }

    /**
     * Retorna PedidoItem baseado no ID.
     *
     */
    public function testGetPedidoItem()
    {
        $pedido = \App\Models\Pedido\Pedido::factory()->create();
        $associacao1 = \App\Models\PedidoItem\PedidoItem::factory()->create();
        $associacao2 = \App\Models\PedidoItem\PedidoItem::factory()->create();
        $itemPedido1 = \App\Models\ItemPedido\ItemPedido::factory()->create();
        $itemPedido2 = \App\Models\ItemPedido\ItemPedido::factory()->create();

        $associacao1->pedido_id = $pedido->id;
        $associacao1->item_pedido_id = $itemPedido1->id;
        $associacao1->save();

        $associacao2->pedido_id = $pedido->id;
        $associacao2->item_pedido_id = $itemPedido2->id;
        $associacao2->save();

        $retorno = $this->implementacao->getPedidoItem($pedido->id);

        $this->assertIsInt(2, $retorno->id);
    }

    /**
     * Retorna uma coleção de PedidoItem baseado em uma associação.
     *
     */
    public function testGetPedidoItems()
    {
        $pedido = \App\Models\Pedido\Pedido::factory()->create();
        $associacao1 = \App\Models\PedidoItem\PedidoItem::factory()->create();
        $associacao2 = \App\Models\PedidoItem\PedidoItem::factory()->create();
        $itemPedido1 = \App\Models\ItemPedido\ItemPedido::factory()->create();
        $itemPedido2 = \App\Models\ItemPedido\ItemPedido::factory()->create();

        $associacao1->pedido_id = $pedido->id;
        $associacao1->item_pedido_id = $itemPedido1->id;
        $associacao1->save();

        $associacao2->pedido_id = $pedido->id;
        $associacao2->item_pedido_id = $itemPedido2->id;
        $associacao2->save();

        $retorno = $this->implementacao->getPedidoItems($pedido->id);

        $this->assertCount(2, $retorno);
    }

    /**
     * Cria um novo PedidoItem
     *
     */
    public function testCreatePedidoItem()
    {
        $pedidoItem = \App\Models\PedidoItem\PedidoItem::factory()->make();
        $pedido = \App\Models\Pedido\Pedido::factory()->create();
        $itemPedido = \App\Models\ItemPedido\ItemPedido::factory()->create();
        $detalhes = [
            'pedido_id'         => $pedido->id,
            'item_pedido_id'    => $itemPedido->id
        ];

        $retorno = $this->implementacao->createPedidoItem($detalhes);

        $pedidoItem->pedido_id = $pedido->id;
        $pedidoItem->item_pedido_id = $itemPedido->id;
        $pedidoItem->save();

        $this->assertEquals($pedidoItem->id-1, $retorno->id);
    }

    /**
     * Atualiza um PedidoItem
     *
     */
    public function testUpdatePedidoItem()
    {
        $pedidoItem = \App\Models\PedidoItem\PedidoItem::factory()->create();
        $pedido = \App\Models\Pedido\Pedido::factory()->create();
        $itemPedido = \App\Models\ItemPedido\ItemPedido::factory()->create();
        $detalhes = [
            'pedido_id'         => $pedido->id,
            'item_pedido_id'    => $itemPedido->id
        ];

        $retorno = $this->implementacao->updatePedidoItem($pedidoItem->id, $detalhes);

        $this->assertEquals($pedidoItem->id, $retorno->id);
    }

    /**
     * Deleta um PedidoItem
     *
     */
    public function testDeletePedidoItem()
    {
        $pedidoItem = \App\Models\PedidoItem\PedidoItem::factory()->create();

        $retorno = $this->implementacao->deletePedidoItem($pedidoItem->id);

        $this->assertDeleted($pedidoItem, [$retorno]);
    }
}
