<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\Contracts\TipoContatoRepository;

class TipoContatoRepositoryImplementation implements TipoContatoRepository
{
    use BaseEloquentRepository;

    /**
     * Retorna TipoContato baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getTipoContato(int $id): ?Model
    {
        return $this->find($id);
    }

    /**
     * Retorna uma coleção de TipoContato baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getTipoContatos(int $id, int $associacao): ?Collection
    {
        return $this;
    }

    /**
     * Cria um novo TipoContato.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createTipoContato(array $detalhes): ?Model
    {
        return $this->create($detalhes);
    }

    /**
     * Atualiza um TipoContato.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateTipoContato(int $id, array $detalhes): ?Model
    {
        return $this->update($id, $detalhes);
    }

    /**
     * Deleta um TipoContato.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteTipoContato(int $id): bool
    {
        $retorno = $this->delete($id);

        if (! $retorno) {
            return false;
        }

        return true;
    }
}
