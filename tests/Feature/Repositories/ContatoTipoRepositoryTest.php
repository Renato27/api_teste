<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace Tests\Feature\Repositories;

use Tests\TestCase;
use App\Models\ContatoTipo\ContatoTipo;
use App\Repositories\Contracts\ContatoTipoRepository;
use App\Repositories\ContatoTipoRepositoryImplementation;

class ContatoTipoRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var ContatoTipoRepository
     */
    protected ContatoTipoRepository $implementacao;

    public function __construct()
    {
        $this->implementacao = new ContatoTipoRepositoryImplementation(new ContatoTipo());
        parent::__construct();
    }

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(ContatoTipoRepository::class);
    }

    /**
     * Retorna ContatoTipo baseado no ID.
     */
    public function testGetContatoTipo()
    {
        $contato = \App\Models\Contato\Contato::factory()->create();
        $tipoContato = \App\Models\TipoContato\TipoContato::factory()->create();
        $associacao = \App\Models\ContatoTipo\ContatoTipo::factory()->create();

        $associacao->contato_id = $contato->id;
        $associacao->tipo_contato_id = $tipoContato->id;
        $associacao->save();

        $retorno = $this->implementacao->getContatoTipo($contato->id);

        $this->assertEquals($associacao->id, $retorno->id);
    }

    /**
     * Retorna uma coleção de ContatoTipo baseado em uma associação.
     */
    public function testGetTipoContatos()
    {
        $tipoContato = \App\Models\TipoContato\TipoContato::factory()->create();
        $contato1 = \App\Models\Contato\Contato::factory()->create();
        $contato2 = \App\Models\Contato\Contato::factory()->create();
        $associacao1 = \App\Models\ContatoTipo\ContatoTipo::factory()->create();
        $associacao2 = \App\Models\ContatoTipo\ContatoTipo::factory()->create();

        $associacao1->contato_id = $contato1->id;
        $associacao1->tipo_contato_id = $tipoContato->id;
        $associacao1->save();

        $associacao2->contato_id = $contato2->id;
        $associacao2->tipo_contato_id = $tipoContato->id;
        $associacao2->save();

        $retorno = $this->implementacao->getTipoContatos($tipoContato->id);

        $this->assertCount(2, $retorno);
    }

    /**
     * Cria um novo ContatoTipo.
     */
    public function testCreateContatoTipo()
    {
        $associacao = \App\Models\ContatoTipo\ContatoTipo::factory()->make();
        $contato = \App\Models\Contato\Contato::factory()->create();
        $tipoContato = \App\Models\TipoContato\TipoContato::factory()->create();
        $detalhes = [
            'contato_id' => $contato->id,
            'tipo_contato_id' => $tipoContato->id,
        ];

        $retorno = $this->implementacao->createContatoTipo($detalhes);

        $this->assertIsInt($retorno->id);
    }

    /**
     * Atualiza um ContatoTipo.
     */
    public function testUpdateContatoTipo()
    {
        $associacao = \App\Models\ContatoTipo\ContatoTipo::factory()->create();
        $contato = \App\Models\Contato\Contato::factory()->create();
        $tipoContato = \App\Models\TipoContato\TipoContato::factory()->create();
        $detalhes = [
            'contato_id' => $contato->id,
            'tipo_contato_id' => $tipoContato->id,
        ];

        $retorno = $this->implementacao->updateContatoTipo($associacao->id, $detalhes);

        $this->assertEquals($associacao->id, $retorno->id);
    }

    /**
     * Deleta um ContatoTipo.
     */
    public function testDeleteContatoTipo()
    {
        $associacao = \App\Models\ContatoTipo\ContatoTipo::factory()->create();

        $retorno = $this->implementacao->deleteContatoTipo($associacao->id);

        $this->assertDeleted($associacao, [$retorno]);
    }
}
