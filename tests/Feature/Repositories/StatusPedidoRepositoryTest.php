<?php

namespace Tests\Feature\Repositories;

use App\Models\StatusPedido\StatusPedido;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Repositories\Contracts\StatusPedidoRepository;
use App\Repositories\StatusPedidoRepositoryImplementation;

class StatusPedidoRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var StatusPedidoRepository
     */
    protected StatusPedidoRepository $implementacao;

    public function __construct()
    {
        $this->implementacao = new StatusPedidoRepositoryImplementation(new StatusPedido());
        parent::__construct();
    }

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(StatusPedidoRepository::class);
    }

    /**
     * Retorna StatusPedido baseado no ID.
     *
     */
    public function testGetStatusPedido()
    {
        $statusPedido = \App\Models\StatusPedido\StatusPedido::factory()->create();

        $retorno = $this->implementacao->getStatusPedido($statusPedido->id);

        $this->assertEquals($statusPedido->id, $retorno->id);
    }

    /**
     * Retorna uma coleção de StatusPedido baseado em uma associação.
     * (Function inativa no momento, não necessário realizar teste)
     */
    // public function testGetStatusPedidos()
    // {
    // }

    /**
     * Cria um novo StatusPedido
     *
     */
    public function testCreateStatusPedido()
    {
        $statusPedido = \App\Models\StatusPedido\StatusPedido::factory()->make();

        $detalhes = [
            'nome'          =>$statusPedido->nome
        ];

        $retorno = $this->implementacao->createStatusPedido($detalhes);

        $this->assertIsInt($retorno->id);
    }

    /**
     * Atualiza um StatusPedido
     *
     */
    public function testUpdateStatusPedido()
    {
        $statusPedido = \App\Models\StatusPedido\StatusPedido::factory()->create();

        $detalhes = [
            'nome'                 => $statusPedido->nome
        ];

        $retorno = $this->implementacao->updateStatusPedido($statusPedido->id, $detalhes);

        $this->assertIsInt($retorno->id);
    }

    /**
     * Deleta um StatusPedido
     *
     */
    public function testDeleteStatusPedido()
    {
        $statusPedido = \App\Models\StatusPedido\StatusPedido::factory()->create();

        $retorno = $this->implementacao->deleteStatusPedido($statusPedido->id);

        $this->assertDeleted($statusPedido, [$retorno]);
    }
}
