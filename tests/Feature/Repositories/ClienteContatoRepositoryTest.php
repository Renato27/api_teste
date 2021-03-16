<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace Tests\Feature\Repositories;

use Tests\TestCase;
use App\Models\ClienteContato\ClienteContato;
use App\Repositories\Contracts\ClienteContatoRepository;
use App\Repositories\ClienteContatoRepositoryImplementation;

class ClienteContatoRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var ClienteContatoRepository
     */
    protected ClienteContatoRepository $implementacao;

    public function __construct()
    {
        $this->implementacao = new ClienteContatoRepositoryImplementation(new ClienteContato());
        parent::__construct();
    }

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(ClienteContatoRepository::class);
    }

    /**
     * Retorna ClienteContato baseado no ID.
     */
    public function testGetAssociacaoByContato()
    {
        $associacao = \App\Models\ClienteContato\ClienteContato::factory()->create();
        $cliente = \App\Models\Clientes\Cliente::factory()->create();
        $contato = \App\Models\Contato\Contato::factory()->create();

        $associacao->cliente_id = $cliente->id;
        $associacao->contato_id = $contato->id;
        $associacao->save();

        $retorno = $this->implementacao->getAssociacaoByContato($contato->id);

        $this->assertIsInt($retorno->id);
    }

    /**
     * Retorna uma coleção de ClienteContato baseado em uma associação.
     */
    public function testGetClientesByContato()
    {
        $associacao1 = \App\Models\ClienteContato\ClienteContato::factory()->create();
        $associacao2 = \App\Models\ClienteContato\ClienteContato::factory()->create();
        $cliente1 = \App\Models\Clientes\Cliente::factory()->create();
        $cliente2 = \App\Models\Clientes\Cliente::factory()->create();
        $contato = \App\Models\Contato\Contato::factory()->create();

        $associacao1->cliente_id = $cliente1->id;
        $associacao1->contato_id = $contato->id;
        $associacao1->save();

        $associacao2->cliente_id = $cliente2->id;
        $associacao2->contato_id = $contato->id;
        $associacao2->save();

        $retorno = $this->implementacao->getClientesByContato($contato->id);

        $this->assertCount(2, $retorno);
    }

    /**
     * Cria um novo ClienteContato.
     */
    public function testCreateClienteContato()
    {
        $associacao = \App\Models\ClienteContato\ClienteContato::factory()->make();
        $cliente = \App\Models\Clientes\Cliente::factory()->create();
        $contato = \App\Models\Contato\Contato::factory()->create();
        $detalhes = [
            'cliente_id' => $cliente->id,
            'contato_id' => $contato->id,
        ];

        $retorno = $this->implementacao->createClienteContato($detalhes);

        $this->assertIsInt($retorno->id);
    }

    /**
     * Atualiza um ClienteContato.
     */
    public function testUpdateClienteContato()
    {
        $associacao = \App\Models\ClienteContato\ClienteContato::factory()->create();
        $cliente = \App\Models\Clientes\Cliente::factory()->create();
        $contato = \App\Models\Contato\Contato::factory()->create();
        $detalhes = [
            'cliente_id' => $cliente->id,
            'contato_id' => $contato->id,
        ];

        $retorno = $this->implementacao->updateClienteContato($associacao->id, $detalhes);

        $this->assertIsInt($retorno->id);
    }

    /**
     * Deleta um ClienteContato.
     */
    public function testDeleteClienteContato()
    {
        $associacao = \App\Models\ClienteContato\ClienteContato::factory()->create();

        $retorno = $this->implementacao->deleteClienteContato($associacao->id);

        $this->assertDeleted($associacao, [$retorno]);
    }
}
