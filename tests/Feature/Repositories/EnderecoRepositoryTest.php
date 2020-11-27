<?php

namespace Tests\Feature\Repositories;

use App\Models\Endereco\Endereco;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Repositories\Contracts\EnderecoRepository;
use App\Repositories\EnderecoRepositoryImplementation;

class EnderecoRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var EnderecoRepository
     */
    protected EnderecoRepository $implementacao;

    public function __construct()
    {
        $this->implementacao = new EnderecoRepositoryImplementation(new Endereco());
        parent::__construct();
    }

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(EnderecoRepository::class);
    }

    /**
     * Retorna Endereco baseado no ID.
     *
     */
    public function testGetEndereco()
    {
        $endereco = \App\Models\Endereco\Endereco::factory()->create();

        $retorno = $this->implementacao->getEndereco($endereco->id);

        $this->assertIsInt($retorno->id);
    }

    /**
     * Retorna uma coleção de Endereco baseado em uma associação.
     *  (Inativo, não necessário implementação do teste)
     */
    // public function testGetEnderecos()
    // {
    // }

    /**
     * Cria um novo Endereco
     *
     */
    public function testCreateEndereco()
    {
        $endereco = \App\Models\Endereco\Endereco::factory()->make();
        $detalhes = [
            'rua'               => $endereco->rua,
            'numero'            => $endereco->numero,
            'bairro'            => $endereco->bairro,
            'complemento'       => $endereco->complemento,
            'cidade'            => $endereco->cidade,
            'estado'            => $endereco->estado,
            'cep'               => $endereco->cep
        ];

        $retorno = $this->implementacao->createEndereco($detalhes);

        $this->assertIsInt($retorno->id);
    }

    /**
     * Atualiza um Endereco
     *
     */
    public function testUpdateEndereco()
    {
        $endereco = \App\Models\Endereco\Endereco::factory()->create();
        $detalhes = [
            'rua'               => $endereco->rua,
            'numero'            => $endereco->numero,
            'bairro'            => $endereco->bairro,
            'complemento'       => $endereco->complemento,
            'cidade'            => $endereco->cidade,
            'estado'            => $endereco->estado,
            'cep'               => $endereco->cep
        ];

        $retorno = $this->implementacao->updateEndereco($endereco->id, $detalhes);

        $this->assertEquals($endereco->id, $retorno->id);

    }

    /**
     * Deleta um Endereco
     *
     */
    public function testDeleteEndereco()
    {
        $endereco = \App\Models\Endereco\Endereco::factory()->create();

        $retorno = $this->implementacao->deleteEndereco($endereco->id);

        $this->assertDeleted($endereco, [$retorno]);
    }
}
