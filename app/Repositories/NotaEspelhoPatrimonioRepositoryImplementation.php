<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\Contracts\NotaEspelhoPatrimonioRepository;

class NotaEspelhoPatrimonioRepositoryImplementation implements NotaEspelhoPatrimonioRepository
{
    use BaseEloquentRepository;

    /**
     * Retorna NotaEspelhoPatrimonio baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getNotaEspelhoPatrimonio(int $id): ?Model
    {
        return $this->find($id);
    }

    /**
     * Retorna uma coleção de NotaEspelhoPatrimonio baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getNotaEspelhoPatrimoniosByNotaEspelho(int $nota_espelho): ?Collection
    {
        return $this->where(['nota_espelho_id' => $nota_espelho])->get();
    }

    /**
     * Cria um novo NotaEspelhoPatrimonio.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createNotaEspelhoPatrimonio(array $detalhes): ?Model
    {
        return $this->create($detalhes);
    }

    /**
     * Atualiza um NotaEspelhoPatrimonio.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateNotaEspelhoPatrimonio(int $id, array $detalhes): ?Model
    {
        return $this->update($id, $detalhes);
    }

    /**
     * Deleta um NotaEspelhoPatrimonio.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteNotaEspelhoPatrimonio(int $id): bool
    {
        $retorno = $this->delete($id);

        if (! $retorno) {
            return false;
        }

        return true;
    }
}
