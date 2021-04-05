<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace Tests\Feature\Repositories;

use Tests\TestCase;
use App\Models\TipoContato\TipoContato;
use App\Repositories\Contracts\TipoContatoRepository;
use App\Repositories\TipoContatoRepositoryImplementation;

class TipoContatoRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var TipoContatoRepository
     */
    protected TipoContatoRepository $implementacao;

    public function __construct()
    {
        $this->implementacao = new TipoContatoRepositoryImplementation(new TipoContato());
        parent::__construct();
    }

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(TipoContatoRepository::class);
    }

    /**
     * Retorna TipoContato baseado no ID.
     */
    public function testGetTipoContato()
    {
        $tipoContato = \App\Models\TipoContato\TipoContato::factory()->create();

        $retorno = $this->implementacao->getTipoContato($tipoContato->id);

        $this->assertEquals($tipoContato->id, $retorno->id);
    }

    /**
     * Retorna uma coleção de TipoContato baseado em uma associação.
     * (Não necessário teste, function inativa).
     */
    // public function testGetTipoContatos()
    // {
    // }

    /**
     * Cria um novo TipoContato.
     */
    public function testCreateTipoContato()
    {
        $tipoContato = \App\Models\TipoContato\TipoContato::factory()->make();

        $detalhes = [
            'nome' => $tipoContato->nome,
        ];

        $retorno = $this->implementacao->createTipoContato($detalhes);

        $this->assertIsInt($retorno->id);
    }

    /**
     * Atualiza um TipoContato.
     */
    public function testUpdateTipoContato()
    {
        $tipoContato = \App\Models\TipoContato\TipoContato::factory()->create();

        $detalhes = [
            'nome' => $tipoContato->nome,
        ];

        $retorno = $this->implementacao->updateTipoContato($tipoContato->id, $detalhes);

        $this->assertIsInt($retorno->id);
    }

    /**
     * Deleta um TipoContato.
     */
    public function testDeleteTipoContato()
    {
        $tipoContato = \App\Models\TipoContato\TipoContato::factory()->create();

        $retorno = $this->implementacao->deleteTipoContato($tipoContato->id);

        $this->assertTrue($retorno);
    }
}
