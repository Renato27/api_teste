<?php

namespace App\Repositories;

use App\Repositories\Contracts\ChamadoArquivoRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class ChamadoArquivoRepositoryImplementation implements ChamadoArquivoRepository
{
    /**
     * Retorna ChamadoArquivo baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getChamadoArquivo(int $id): ?Model
    {

    }

    /**
     * Retorna uma coleção de ChamadoArquivo baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getChamadoArquivos(int $id, int $associacao): ?Collection
    {

    }

    /**
     * Cria um novo ChamadoArquivo
     *
     * @param array $detalhes
     * @return Model|null
     */    
    public function createChamadoArquivo(array $detalhes): ?Model
    {

    }

    /**
     * Atualiza um ChamadoArquivo
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function updateChamadoArquivo(int $id, array $detalhes): ?Model
    {

    }

    /**
     * Deleta um ChamadoArquivo
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */ 
    public function deleteChamadoArquivo(int $id): bool
    {

    }
}