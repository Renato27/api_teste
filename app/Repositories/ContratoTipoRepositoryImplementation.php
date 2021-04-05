<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\Contracts\ContratoTipoRepository;

class ContratoTipoRepositoryImplementation implements ContratoTipoRepository
{
    use BaseEloquentRepository;

    /**
     * Retorna ContratoTipo baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getContratoTipo(int $id): ?Model
    {
        return $this;
    }

    /**
     * Retorna uma coleção de ContratoTipo baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getContratoTipos(int $id, int $associacao): ?Collection
    {
        return $this;
    }

    /**
     * Cria um novo ContratoTipo.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createContratoTipo(array $detalhes): ?Model
    {
        return $this->create($detalhes);
    }

    /**
     * Atualiza um ContratoTipo.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateContratoTipo(int $id, array $detalhes): ?Model
    {
        return $this->update($id, $detalhes);
    }

    /**
     * Deleta um ContratoTipo.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteContratoTipo(int $id): bool
    {
        $returno = $this->delete($id);

        if (! $returno) {
            return false;
        }

        return true;
    }
}
