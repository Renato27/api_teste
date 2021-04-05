<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\Contracts\EnderecoRepository;

class EnderecoRepositoryImplementation implements EnderecoRepository
{
    use BaseEloquentRepository;

    /**
     * Retorna Endereco baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getEndereco(int $id): ?Model
    {
        return $this->find($id);
    }

    /**
     * Retorna uma coleção de Endereco baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getEnderecos(): ?Collection
    {
        return $this->getAll();
    }

    /**
     * Cria um novo Endereco.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createEndereco(array $detalhes): ?Model
    {
        return $this->create($detalhes);
    }

    /**
     * Atualiza um Endereco.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateEndereco(int $id, array $detalhes): ?Model
    {
        return $this->update($id, $detalhes);
    }

    /**
     * Deleta um Endereco.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteEndereco(int $id): bool
    {
        $retorno = $this->delete($id);

        if (! $retorno) {
            return false;
        }

        return true;
    }
}
