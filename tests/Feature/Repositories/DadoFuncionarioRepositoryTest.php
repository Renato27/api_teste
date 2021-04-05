<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace Tests\Feature\Repositories;

use Tests\TestCase;
use App\Models\DadoFuncionario\DadoFuncionario;
use App\Repositories\Contracts\DadoFuncionarioRepository;
use App\Repositories\DadoFuncionarioRepositoryImplementation;

class DadoFuncionarioRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var DadoFuncionarioRepository
     */
    protected DadoFuncionarioRepository $implementacao;

    public function __construct()
    {
        $this->implementacao = new DadoFuncionarioRepositoryImplementation(new DadoFuncionario());
        parent::__construct();
    }

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(DadoFuncionarioRepository::class);
    }

    /**
     * Retorna DadoFuncionario baseado no ID.
     */
    public function testGetDadoFuncionario()
    {
        $dadoFuncionario = \App\Models\DadoFuncionario\DadoFuncionario::factory()->create();

        $retorno = $this->implementacao->getDadoFuncionario($dadoFuncionario->id);

        $this->assertIsInt($retorno->id);
    }

    /**
     * Retorna uma coleção de DadoFuncionario baseado em uma associação.
     *  (Inativo, não necessário da realização de teste).
     */
    // public function testGetDadoFuncionarios()
    // {
    // }

    /**
     * Cria um novo DadoFuncionario.
     */
    public function testCreateDadoFuncionario()
    {
        $dadoFuncionario = \App\Models\DadoFuncionario\DadoFuncionario::factory()->make();
        $detalhes = [
            'telefone' => $dadoFuncionario->telefone,
            'rg' => $dadoFuncionario->rg,
            'cpf' => $dadoFuncionario->cpf,
            'titulo_eleitor' => $dadoFuncionario->titulo_eleitor,
            'secao_titulo_eleitor' => $dadoFuncionario->secao_titulo_eleitor,
            'ctps' => $dadoFuncionario->ctps,
            'email' => $dadoFuncionario->email,
        ];

        $retorno = $this->implementacao->createDadoFuncionario($detalhes);

        $this->assertIsInt($retorno->id);
    }

    /**
     * Atualiza um DadoFuncionario.
     */
    public function testUpdateDadoFuncionario()
    {
        $dadoFuncionario = \App\Models\DadoFuncionario\DadoFuncionario::factory()->create();
        $detalhes = [
            'telefone' => $dadoFuncionario->telefone,
            'rg' => $dadoFuncionario->rg,
            'cpf' => $dadoFuncionario->cpf,
            'titulo_eleitor' => $dadoFuncionario->titulo_eleitor,
            'secao_titulo_eleitor' => $dadoFuncionario->secao_titulo_eleitor,
            'ctps' => $dadoFuncionario->ctps,
            'email' => $dadoFuncionario->email,
        ];

        $retorno = $this->implementacao->updateDadoFuncionario($dadoFuncionario->id, $detalhes);

        $this->assertIsInt($retorno->id);
    }

    /**
     * Deleta um DadoFuncionario.
     */
    public function testDeleteDadoFuncionario()
    {
        $dadoFuncionario = \App\Models\DadoFuncionario\DadoFuncionario::factory()->create();

        $retorno = $this->implementacao->deleteDadoFuncionario($dadoFuncionario->id);

        $this->assertDeleted($dadoFuncionario, [$retorno]);
    }
}
