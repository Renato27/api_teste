<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace Tests\Feature\Repositories;

use Tests\TestCase;
use App\Models\ClienteEndereco\ClienteEndereco;
use App\Repositories\Contracts\ClienteEnderecoRepository;
use App\Repositories\ClienteEnderecoRepositoryImplementation;

class ClienteEnderecoRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var ClienteEnderecoRepository
     */
    protected ClienteEnderecoRepository $implementacao;

    public function __construct()
    {
        $this->implementacao = new ClienteEnderecoRepositoryImplementation(new ClienteEndereco());
        parent::__construct();
    }

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(ClienteEnderecoRepository::class);
    }

    /**
     * Retorna ClienteEndereco baseado no ID.
     */
    public function testGetClienteEndereco()
    {
        $cliente = \App\Models\Clientes\Cliente::factory()->create();
        $endereco = \App\Models\Endereco\Endereco::factory()->create();
        $associacao = \App\Models\ClienteEndereco\ClienteEndereco::factory()->create();

        $associacao->cliente_id = $cliente->id;
        $associacao->endereco_id = $endereco->id;
        $associacao->save();

        $retorno = $this->implementacao->getClienteEndereco($cliente->id);

        $this->assertEquals($associacao->id, $retorno->id);
    }

    /**
     * Retorna uma coleção de ClienteEndereco baseado em uma associação.
     */
    public function testGetClienteEnderecos()
    {
        $cliente = \App\Models\Clientes\Cliente::factory()->create();
        $endereco1 = \App\Models\Endereco\Endereco::factory()->create();
        $endereco2 = \App\Models\Endereco\Endereco::factory()->create();
        $associacao1 = \App\Models\ClienteEndereco\ClienteEndereco::factory()->create();
        $associacao2 = \App\Models\ClienteEndereco\ClienteEndereco::factory()->create();

        $associacao1->cliente_id = $cliente->id;
        $associacao1->endereco_id = $endereco1->id;
        $associacao1->save();

        $associacao2->cliente_id = $cliente->id;
        $associacao2->endereco_id = $endereco2->id;
        $associacao2->save();

        $retorno = $this->implementacao->getClienteEnderecos($cliente->id);

        $this->assertCount(2, $retorno);
    }

    /**
     * Cria um novo ClienteEndereco.
     */
    public function testCreateClienteEndereco()
    {
        $associacao = \App\Models\ClienteEndereco\ClienteEndereco::factory()->make();
        $cliente = \App\Models\Clientes\Cliente::factory()->create();
        $endereco = \App\Models\Endereco\Endereco::factory()->create();
        $detalhes = [
            'cliente_id' => $cliente->id,
            'endereco_id' => $endereco->id,
        ];

        $retorno = $this->implementacao->createClienteEndereco($detalhes);

        $associacao = \App\Models\ClienteEndereco\ClienteEndereco::factory()->create();

        $this->assertEquals($associacao->id - 1, $retorno->id);
    }

    /**
     * Atualiza um ClienteEndereco.
     */
    public function testUpdateClienteEndereco()
    {
        $associacao = \App\Models\ClienteEndereco\ClienteEndereco::factory()->create();
        $cliente = \App\Models\Clientes\Cliente::factory()->create();
        $endereco = \App\Models\Endereco\Endereco::factory()->create();
        $detalhes = [
            'cliente_id' => $cliente->id,
            'endereco_id' => $endereco->id,
        ];

        $retorno = $this->implementacao->updateClienteEndereco($associacao->id, $detalhes);

        $this->assertIsInt($retorno->id);
    }

    /**
     * Deleta um ClienteEndereco.
     */
    public function testDeleteClienteEndereco()
    {
        $cliente = \App\Models\Clientes\Cliente::factory()->create();
        $endereco = \App\Models\Endereco\Endereco::factory()->create();
        $associacao = \App\Models\ClienteEndereco\ClienteEndereco::factory()->create();

        $associacao->cliente_id = $cliente->id;
        $associacao->endereco_id = $endereco->id;
        $associacao->save();

        $retorno = $this->implementacao->deleteClienteEndereco($associacao->id);

        $this->assertDeleted($associacao, [$retorno]);
    }
}
