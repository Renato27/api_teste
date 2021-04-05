<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace Tests\Feature\Repositories;

use Tests\TestCase;
use App\Models\ItemPedido\ItemPedido;
use App\Repositories\Contracts\ItemPedidoRepository;
use App\Repositories\ItemPedidoRepositoryImplementation;

class ItemPedidoRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var ItemPedidoRepository
     */
    protected ItemPedidoRepository $implementacao;

    public function __construct()
    {
        $this->implementacao = new ItemPedidoRepositoryImplementation(new ItemPedido());
        parent::__construct();
    }

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(ItemPedidoRepository::class);
    }

    /**
     * Retorna ItemPedido baseado no ID.
     */
    public function testGetItemPedido()
    {
        $itemPedido = \App\Models\ItemPedido\ItemPedido::factory()->create();

        $retorno = $this->implementacao->getItemPedido($itemPedido->id);

        $this->assertIsInt($retorno->id);
    }

    /**
     * Retorna uma coleção de ItemPedido baseado em uma associação.
     *  (Inativo, não necessário a implementação do teste no atual momento).
     */
    // public function testGetItemPedidos()
    // {

    // }

    /**
     * Cria um novo ItemPedido.
     */
    public function testCreateItemPedido()
    {
        $itemPedido = \App\Models\ItemPedido\ItemPedido::factory()->make();
        $detalhes = [
            'valor' => $itemPedido->valor,
            'quantidade' => $itemPedido->quantidade,
        ];

        $retorno = $this->implementacao->createItemPedido($detalhes);

        $itemPedido = \App\Models\ItemPedido\ItemPedido::factory()->create();

        $this->assertEquals($itemPedido->id - 1, $retorno->id);
    }

    /**
     * Atualiza um ItemPedido.
     */
    public function testUpdateItemPedido()
    {
        $itemPedido = \App\Models\ItemPedido\ItemPedido::factory()->create();
        $detalhes = [
            'valor' => $itemPedido->valor,
            'quantidade' => $itemPedido->quantidade,
        ];

        $retorno = $this->implementacao->updateItemPedido($itemPedido->id, $detalhes);

        $this->assertEquals($itemPedido->id, $retorno->id);
    }

    /**
     * Deleta um ItemPedido.
     */
    public function testDeleteItemPedido()
    {
        $itemPedido = \App\Models\ItemPedido\ItemPedido::factory()->create();

        $retorno = $this->implementacao->deleteItemPedido($itemPedido->id);

        $this->assertDeleted($itemPedido, [$retorno]);
    }
}
