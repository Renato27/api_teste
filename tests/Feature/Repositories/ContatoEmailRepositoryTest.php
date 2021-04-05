<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace Tests\Feature\Repositories;

use Tests\TestCase;
use App\Models\ContatoEmail\ContatoEmail;
use App\Repositories\Contracts\ContatoEmailRepository;
use App\Repositories\ContatoEmailRepositoryImplementation;

class ContatoEmailRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var ContatoEmailRepository
     */
    protected ContatoEmailRepository $implementacao;

    public function __construct()
    {
        $this->implementacao = new ContatoEmailRepositoryImplementation(new ContatoEmail());
        parent::__construct();
    }

    /**
     * Realiza a instancia do recurso.
     *
     * @return void
     */
    private function testGetRecurso()
    {
        $this->repository = app(ContatoEmailRepository::class);
    }

    /**
     * Retorna ContatoEmail baseado no ID.
     */
    public function testGetContatoEmail()
    {
        $contato = \App\Models\Contato\Contato::factory()->create();
        $contatoEmail = \App\Models\ContatoEmail\ContatoEmail::factory()->create();

        $contatoEmail->contato_id = $contato->id;
        $contatoEmail->save();

        $retorno = $this->implementacao->getContatoEmail($contato->id);

        $this->assertEquals($contatoEmail->id, $retorno->id);
    }

    /**
     * Retorna uma coleção de ContatoEmail baseado em uma associação.
     */
    public function testGetContatoEmails()
    {
        $contato = \App\Models\Contato\Contato::factory()->create();
        $contatoEmail1 = \App\Models\ContatoEmail\ContatoEmail::factory()->create();
        $contatoEmail2 = \App\Models\ContatoEmail\ContatoEmail::factory()->create();

        $contatoEmail1->contato_id = $contato->id;
        $contatoEmail1->save();

        $contatoEmail2->contato_id = $contato->id;
        $contatoEmail2->save();

        $retorno = $this->implementacao->getContatoEmails($contato->id);

        $this->assertCount(2, $retorno);
    }

    /**
     * Cria um novo ContatoEmail.
     */
    public function testCreateContatoEmail()
    {
        $contatoEmail = \App\Models\ContatoEmail\ContatoEmail::factory()->make();
        $contato = \App\Models\Contato\Contato::factory()->create();
        $detalhes = [
            'email' => $contatoEmail->email,
            'principal' => $contatoEmail->principal,
            'contato_id' => $contato->id,
        ];

        $retorno = $this->implementacao->createContatoEmail($detalhes);

        $this->assertIsInt($retorno->id);
    }

    /**
     * Atualiza um ContatoEmail.
     */
    public function testUpdateContatoEmail()
    {
        $contatoEmail = \App\Models\ContatoEmail\ContatoEmail::factory()->create();
        $contato = \App\Models\Contato\Contato::factory()->create();
        $detalhes = [
            'email' => $contatoEmail->email,
            'principal' => $contatoEmail->principal,
            'contato_id' => $contato->id,
        ];

        $retorno = $this->implementacao->updateContatoEmail($contatoEmail->contato_id, $detalhes);

        $this->assertIsInt($retorno->id);
    }

    /**
     * Deleta um ContatoEmail.
     */
    public function testDeleteContatoEmail()
    {
        $contatoEmail = \App\Models\ContatoEmail\ContatoEmail::factory()->create();

        $retorno = $this->implementacao->deleteContatoEmail($contatoEmail->id);

        $this->assertDeleted($contatoEmail, [$retorno]);
    }
}
