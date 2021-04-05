<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace Tests\Feature\Repositories;

use Tests\TestCase;
use App\Models\EnderecoFuncionario\EnderecoFuncionario;
use App\Repositories\Contracts\EnderecoFuncionarioRepository;
use App\Repositories\EnderecoFuncionarioRepositoryImplementation;

class EnderecoFuncionarioRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var EnderecoFuncionarioRepository
     */
    protected EnderecoFuncionarioRepository $implementacao;

    public function __construct()
    {
        $this->implementacao = new EnderecoFuncionarioRepositoryImplementation(new EnderecoFuncionario());
        parent::__construct();
    }

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(EnderecoFuncionarioRepository::class);
    }

    /**
     * Retorna EnderecoFuncionario baseado no ID.
     */
    public function testGetEnderecoFuncionario()
    {
        $enderecoFuncionario = \App\Models\EnderecoFuncionario\EnderecoFuncionario::factory()->create();

        $retorno = $this->implementacao->getenderecoFuncionario($enderecoFuncionario->id);

        $this->assertIsInt($retorno->id);
    }

    /**
     * Retorna uma coleção de EnderecoFuncionario baseado em uma associação.
     *  (Inativo, não necessário a implementação de teste).
     */
    // public function testGetEnderecoFuncionarios()
    // {
    // }

    /**
     * Cria um novo EnderecoFuncionario.
     */
    public function testCreateEnderecoFuncionario()
    {
        $enderecoFuncionario = \App\Models\EnderecoFuncionario\EnderecoFuncionario::factory()->make();
        $detalhes = [
            'rua' => $enderecoFuncionario->rua,
            'numero' => $enderecoFuncionario->numero,
            'bairro' => $enderecoFuncionario->bairro,
            'complemento' => $enderecoFuncionario->complemento,
            'cidade' => $enderecoFuncionario->cidade,
            'cep' => $enderecoFuncionario->cep,
        ];

        $retorno = $this->implementacao->createEnderecoFuncionario($detalhes);

        $this->assertIsInt($retorno->id);
    }

    /**
     * Atualiza um EnderecoFuncionario.
     */
    public function testUpdateEnderecoFuncionario()
    {
        $enderecoFuncionario = \App\Models\EnderecoFuncionario\EnderecoFuncionario::factory()->create();
        $detalhes = [
            'rua' => $enderecoFuncionario->rua,
            'numero' => $enderecoFuncionario->numero,
            'bairro' => $enderecoFuncionario->bairro,
            'complemento' => $enderecoFuncionario->complemento,
            'cidade' => $enderecoFuncionario->cidade,
            'cep' => $enderecoFuncionario->cep,
        ];

        $retorno = $this->implementacao->updateEnderecoFuncionario($enderecoFuncionario->id, $detalhes);

        $this->assertIsInt($retorno->id);
    }

    /**
     * Deleta um EnderecoFuncionario.
     */
    public function testDeleteEnderecoFuncionario()
    {
        $enderecoFuncionario = \App\Models\EnderecoFuncionario\EnderecoFuncionario::factory()->create();

        $retorno = $this->implementacao->deleteEnderecoFuncionario($enderecoFuncionario->id);

        $this->assertDeleted($enderecoFuncionario, [$retorno]);
    }
}
