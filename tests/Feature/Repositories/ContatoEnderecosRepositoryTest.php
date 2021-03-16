<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace Tests\Feature\Repositories;

use Tests\TestCase;
use App\Models\ContatoEnderecos\ContatoEnderecos;
use App\Repositories\Contracts\ContatoEnderecosRepository;
use App\Repositories\ContatoEnderecosRepositoryImplementation;

class ContatoEnderecosRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var ContatoEnderecosRepository
     */
    protected ContatoEnderecosRepository $implementacao;

    public function __construct()
    {
        $this->implementacao = new ContatoEnderecosRepositoryImplementation(new ContatoEnderecos());
        parent::__construct();
    }

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(ContatoEnderecosRepository::class);
    }

    /**
     * Retorna ContatoEnderecos baseado no ID.
     */
    public function testGetContatoEndereco()
    {
        $associacao = \App\Models\ContatoEnderecos\ContatoEnderecos::factory()->create();
        $contato = \App\Models\Contato\Contato::factory()->create();
        $endereco = \App\Models\Endereco\Endereco::factory()->create();

        $associacao->contato_id = $contato->id;
        $associacao->endereco_id = $endereco->id;
        $associacao->save();

        $retorno = $this->implementacao->getContatoEndereco($associacao->id);

        $this->assertIsInt($retorno->id);
    }

    /**
     * Retorna uma coleção de ContatoEnderecos baseado em uma associação.
     */
    public function testGetContatosEnderecos()
    {
        $associacao1 = \App\Models\ContatoEnderecos\ContatoEnderecos::factory()->create();
        $associacao2 = \App\Models\ContatoEnderecos\ContatoEnderecos::factory()->create();
        $contato = \App\Models\Contato\Contato::factory()->create();
        $endereco1 = \App\Models\Endereco\Endereco::factory()->create();
        $endereco2 = \App\Models\Endereco\Endereco::factory()->create();

        $associacao1->contato_id = $contato->id;
        $associacao1->endereco_id = $endereco1->id;
        $associacao1->save();

        $associacao2->contato_id = $contato->id;
        $associacao2->endereco_id = $endereco2->id;
        $associacao2->save();

        $retorno = $this->implementacao->getContatosEnderecos($contato->id);

        $this->assertCount(2, $retorno);
    }

    /**
     * Cria um novo ContatoEnderecos.
     */
    public function testCreateContatoEnderecos()
    {
        $associacao = \App\Models\ContatoEnderecos\ContatoEnderecos::factory()->make();
        $contato = \App\Models\Contato\Contato::factory()->create();
        $endereco = \App\Models\Endereco\Endereco::factory()->create();
        $detalhes = [
            'contato_id' => $contato->id,
            'endereco_id' => $endereco->id,
        ];

        $retorno = $this->implementacao->createContatoEnderecos($detalhes);

        $this->assertIsInt($retorno->id);
    }

    /**
     * Atualiza um ContatoEnderecos.
     */
    public function testUpdateContatoEnderecos()
    {
        $associacao = \App\Models\ContatoEnderecos\ContatoEnderecos::factory()->create();
        $contato = \App\Models\Contato\Contato::factory()->create();
        $endereco = \App\Models\Endereco\Endereco::factory()->create();
        $detalhes = [
            'contato_id' => $contato->id,
            'endereco_id' => $endereco->id,
        ];

        $retorno = $this->implementacao->createContatoEnderecos($detalhes);

        $associacao = \App\Models\ContatoEnderecos\ContatoEnderecos::factory()->create();

        $this->assertEquals($associacao->id - 1, $retorno->id);
    }

    /**
     * Deleta um ContatoEnderecos.
     */
    public function testDeleteContatoEnderecos()
    {
        $associacao = \App\Models\ContatoEnderecos\ContatoEnderecos::factory()->create();

        $retorno = $this->implementacao->deleteContatoEnderecos($associacao->id);

        $this->assertDeleted($associacao, [$retorno]);
    }
}
