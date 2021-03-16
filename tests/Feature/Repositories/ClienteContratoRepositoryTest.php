<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace Tests\Feature\Repositories;

use Tests\TestCase;
use App\Models\ClienteContrato\ClienteContrato;
use App\Repositories\Contracts\ClienteContratoRepository;
use App\Repositories\ClienteContratoRepositoryImplementation;

class ClienteContratoRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var ClienteContratoRepository
     */
    protected ClienteContratoRepository $implementacao;

    public function __construct()
    {
        $this->implementacao = new ClienteContratoRepositoryImplementation(new ClienteContrato());
        parent::__construct();
    }

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(ClienteContratoRepository::class);
    }

    /**
     * Retorna ClienteContrato baseado no ID.
     */
    public function testGetClienteByContrato()
    {
        $contrato = \App\Models\Contratos\Contrato::factory()->create();
        $cliente = \App\Models\Clientes\Cliente::factory()->create();
        $associacao = \App\Models\ClienteContrato\ClienteContrato::factory()->create();

        $associacao->cliente_id = $cliente->id;
        $associacao->contrato_id = $contrato->id;
        $associacao->save();

        $retorno = $this->implementacao->getClienteByContrato($contrato->id);

        $this->assertEquals($associacao->cliente_id, $retorno->id);
    }

    /**
     * Retorna uma coleção de ClienteContrato baseado em uma associação.
     */
    public function testGetContratosByCliente()
    {
        $contrato1 = \App\Models\Contratos\Contrato::factory()->create();
        $contrato2 = \App\Models\Contratos\Contrato::factory()->create();
        $cliente = \App\Models\Clientes\Cliente::factory()->create();
        $associacao1 = \App\Models\ClienteContrato\ClienteContrato::factory()->create();
        $associacao2 = \App\Models\ClienteContrato\ClienteContrato::factory()->create();

        $associacao1->cliente_id = $cliente->id;
        $associacao1->contrato_id = $contrato1->id;
        $associacao1->save();

        $associacao2->cliente_id = $cliente->id;
        $associacao2->contrato_id = $contrato2->id;
        $associacao2->save();

        $retorno = $this->implementacao->getContratosByCliente($cliente->id);

        $this->assertCount(2, $retorno);
    }

    /**
     * Cria um novo ClienteContrato.
     */
    public function testCreateClienteContrato()
    {
        $associacao = \App\Models\ClienteContrato\ClienteContrato::factory()->create();
        $contrato = \App\Models\Contratos\Contrato::factory()->create();
        $cliente = \App\Models\Clientes\Cliente::factory()->create();
        $detalhes = [
            'cliente_id' => $cliente->id,
            'contrato_id' => $contrato->id,
        ];

        $retorno = $this->implementacao->createClienteContrato($detalhes);

        $this->assertEquals($associacao->id + 1, $retorno->id);
    }

    /**
     * Atualiza um ClienteContrato.
     */
    public function testUpdateClienteContrato()
    {
        $associacao = \App\Models\ClienteContrato\ClienteContrato::factory()->create();
        $contrato = \App\Models\Contratos\Contrato::factory()->create();
        $cliente = \App\Models\Clientes\Cliente::factory()->create();
        $detalhes = [
            'cliente_id' => $cliente->id,
            'contrato_id' => $contrato->id,
        ];

        $retorno = $this->implementacao->updateClienteContrato($associacao->id, $detalhes);

        $this->assertEquals($associacao->id, $retorno->id);
    }

    /**
     * Deleta um ClienteContrato.
     */
    public function testDeleteClienteContrato()
    {
        $associacao = \App\Models\ClienteContrato\ClienteContrato::factory()->create();

        $retorno = $this->implementacao->deleteClienteContrato($associacao->id);

        $this->assertDeleted($associacao, [$retorno]);
    }
}
