<?php

namespace Tests\Feature\Repositories;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Repositories\Contracts\ContatoEmailRepository;

class ContatoEmailRepositoryTest extends TestCase
{
    /**
     * Repositório de chamados.
     *
     * @var ContatoEmailRepository
     */
    protected ContatoEmailRepository $repository;

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
     *
     */
    public function testGetContatoEmail()
    {

    }

    /**
     * Retorna uma coleção de ContatoEmail baseado em uma associação.
     *
     */
    public function testGetContatoEmails()
    {

    }

    /**
     * Cria um novo ContatoEmail
     *
     */    
    public function testCreateContatoEmail()
    {

    }

    /**
     * Atualiza um ContatoEmail
     *
     */ 
    public function testUpdateContatoEmail()
    {

    }

    /**
     * Deleta um ContatoEmail
     *
     */ 
    public function testDeleteContatoEmail()
    {

    }
}
