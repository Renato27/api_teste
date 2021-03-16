<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\Contracts\FichaRepository;

class FichaRepositoryImplementation implements FichaRepository
{
    use BaseEloquentRepository;

    /**
     * Retorna Ficha baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getFicha(int $id): ?Model
    {
        return $this->find($id);
    }

    /**
     * Retorna uma coleção de Ficha baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getFichas(int $id, int $associacao): ?Collection
    {
        return collect();
    }

    /**
     * Cria um novo Ficha.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createFicha(array $detalhes): ?Model
    {
        return $this->create($detalhes);
    }

    /**
     * Atualiza um Ficha.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateFicha(int $id, array $detalhes): ?Model
    {
        return $this->update($id, $detalhes);
    }

    /**
     * Deleta um Ficha.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteFicha(int $id): bool
    {
        $retorno = $this->delete($id);

        if (! $retorno) {
            return false;
        }

        return true;
    }
}
