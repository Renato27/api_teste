<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace Tests\Feature\Repositories;

use Tests\TestCase;
use App\Models\ContratoPedido\ContratoPedido;
use App\Repositories\Contracts\ContratoPedidoRepository;
use App\Repositories\ContratoPedidoRepositoryImplementation;

class ContratoPedidoRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var ContratoPedidoRepository
     */
    protected ContratoPedidoRepository $implementacao;

    public function __construct()
    {
        $this->implementacao = new ContratoPedidoRepositoryImplementation(new ContratoPedido());
        parent::__construct();
    }

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(ContratoPedidoRepository::class);
    }

    /**
     * Retorna ContratoPedido baseado no ID.
     */
    public function testGetContratoPedido()
    {
        $pedido = \App\Models\Pedido\Pedido::factory()->create();
        $contrato = \App\Models\Contratos\Contrato::factory()->create();
        $associacao = \App\Models\ContratoPedido\ContratoPedido::factory()->create();

        $associacao->pedido_id = $pedido->id;
        $associacao->contrato_id = $contrato->id;
        $associacao->save();

        $retorno = $this->implementacao->getContratoPedido($pedido->id);

        $this->assertEquals($associacao->id, $retorno->id);
    }

    /**
     * Retorna uma coleção de ContratoPedido baseado em uma associação.
     */
    public function testGetContratoPedidos()
    {
        $pedido1 = \App\Models\Pedido\Pedido::factory()->create();
        $pedido2 = \App\Models\Pedido\Pedido::factory()->create();
        $contrato = \App\Models\Contratos\Contrato::factory()->create();
        $associacao1 = \App\Models\ContratoPedido\ContratoPedido::factory()->create();
        $associacao2 = \App\Models\ContratoPedido\ContratoPedido::factory()->create();

        $associacao1->pedido_id = $pedido1->id;
        $associacao1->contrato_id = $contrato->id;
        $associacao1->save();

        $associacao2->pedido_id = $pedido2->id;
        $associacao2->contrato_id = $contrato->id;
        $associacao2->save();

        $retorno = $this->implementacao->getContratoPedidos($contrato->id);

        $this->assertCount(2, $retorno);
    }

    /**
     * Cria um novo ContratoPedido.
     */
    public function testCreateContratoPedido()
    {
        $pedido = \App\Models\Pedido\Pedido::factory()->create();
        $contrato = \App\Models\Contratos\Contrato::factory()->create();
        $detalhes = [
            'pedido_id' => $pedido->id,
            'contrato_id' => $contrato->id,
        ];

        $retorno = $this->implementacao->createContratoPedido($detalhes);

        $this->assertIsInt($retorno->id);
    }

    /**
     * Atualiza um ContratoPedido.
     */
    public function testUpdateContratoPedido()
    {
        $associacao = \App\Models\ContratoPedido\ContratoPedido::factory()->create();
        $pedido = \App\Models\Pedido\Pedido::factory()->create();
        $contrato = \App\Models\Contratos\Contrato::factory()->create();
        $detalhes = [
            'pedido_id' => $pedido->id,
            'contrato_id' => $contrato->id,
        ];

        $retorno = $this->implementacao->updateContratoPedido($associacao->id, $detalhes);

        $this->assertIsInt($associacao->id, $retorno->id);
    }

    /**
     * Deleta um ContratoPedido.
     */
    public function testDeleteContratoPedido()
    {
        $contratoPedido = \App\Models\ContratoPedido\ContratoPedido::factory()->create();

        $retorno = $this->implementacao->deleteContratoPedido($contratoPedido->id);

        $this->assertDeleted($contratoPedido, [$retorno]);
    }
}
