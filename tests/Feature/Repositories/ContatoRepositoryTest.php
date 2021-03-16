<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace Tests\Feature\Repositories;

use Tests\TestCase;
use App\Models\Contato\Contato;
use App\Repositories\Contracts\ContatoRepository;
use App\Repositories\ContatoRepositoryImplementation;

class ContatoRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var ContatoRepository
     */
    protected ContatoRepository $implementacao;

    public function __construct()
    {
        $this->implementacao = new ContatoRepositoryImplementation(new Contato());
        parent::__construct();
    }

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(ContatoRepository::class);
    }

    /**
     * Retorna Contato baseado no ID.
     */
    public function testGetContato()
    {
        $contato = \App\Models\Contato\Contato::factory()->create();

        $retorno = $this->implementacao->getContato($contato->id);

        $this->assertIsInt($retorno->id);
    }

    /**
     * Retorna uma coleção de Contato baseado em uma associação.
     *  (Não necessário implementação de teste).
     */
    // public function testGetContatos()
    // {
    // }

    /**
     * Cria um novo Contato.
     */
    public function testCreateContato()
    {
        $contato = \App\Models\Contato\Contato::factory()->make();
        $detalhes = [
            'nome' => $contato->nome,
            'cargo' => $contato->cargo,
            'telefone' => $contato->telefone,
            'celular' => $contato->celular,
        ];

        $retorno = $this->implementacao->createContato($detalhes);

        $this->assertIsInt($retorno->id);
    }

    /**
     * Atualiza um Contato.
     */
    public function testUpdateContato()
    {
        $contato = \App\Models\Contato\Contato::factory()->create();
        $detalhes = [
            'nome' => $contato->nome,
            'cargo' => $contato->cargo,
            'telefone' => $contato->telefone,
            'celular' => $contato->celular,
        ];

        $retorno = $this->implementacao->updateContato($contato->id, $detalhes);

        $this->assertIsInt($retorno->id);
    }

    /**
     * Deleta um Contato.
     */
    public function testDeleteContato()
    {
        $contato = \App\Models\Contato\Contato::factory()->create();

        $retorno = $this->implementacao->deleteContato($contato->id);

        $this->assertDeleted($contato, [$retorno]);
    }
}
