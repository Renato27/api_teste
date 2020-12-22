<?php

namespace App\Repositories;

use App\Repositories\Contracts\TipoChamadoRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class TipoChamadoRepositoryImplementation implements TipoChamadoRepository
{
    /**
     * Retorna TipoChamado baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getTipoChamado(int $id): ?Model
    {

    }

    /**
     * Retorna uma coleção de TipoChamado baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getTipoChamados(int $id, int $associacao): ?Collection
    {

    }

    /**
     * Cria um novo TipoChamado
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createTipoChamado(array $detalhes): ?Model
    {

    }

    /**
     * Atualiza um TipoChamado
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updateTipoChamado(int $id, array $detalhes): ?Model
    {

    }

    /**
     * Deleta um TipoChamado
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deleteTipoChamado(int $id): bool
    {

    }
}