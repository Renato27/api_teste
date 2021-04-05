<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\Contracts\ContatoRepository;

class ContatoRepositoryImplementation implements ContatoRepository
{
    use  BaseEloquentRepository;

    /**
     * Retorna Contato baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getContato(int $id): ?Model
    {
        return $this->find($id);
    }

    /**
     * Retorna uma coleção de Contato baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getContatos(): ?Collection
    {
        return $this->getAll();
    }

    /**
     * Cria um novo Contato.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createContato(array $detalhes): ?Model
    {
        return $this->create($detalhes);
    }

    /**
     * Atualiza um Contato.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateContato(int $id, array $detalhes): ?Model
    {
        return $this->update($id, $detalhes);
    }

    /**
     * Deleta um Contato.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteContato(int $id): bool
    {
        $retorno = $this->delete($id);

        if (! $retorno) {
            return false;
        }

        return true;
    }
}
