<?php

namespace App\Repositories;

use App\Repositories\Contracts\ContatoEmailRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class ContatoEmailRepositoryImplementation implements ContatoEmailRepository
{
    use BaseEloquentRepository;

    /**
     * Retorna ContatoEmail baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getContatoEmail(int $contato): ?Model
    {
        return $this->where(['contato_id' => $contato])->first();
    }

    /**
     * Retorna uma coleção de ContatoEmail baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getContatoEmails(int $contato): ?Collection
    {
        return $this->where(['contato_id' => $contato])->get();
    }

    /**
     * Cria um novo ContatoEmail
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createContatoEmail(array $detalhes): ?Model
    {
        return $this->create($detalhes);
    }

    /**
     * Atualiza um ContatoEmail
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateContatoEmail(int $contato, array $detalhes): ?Model
    {
        $email = $this->where(['contato_id' => $contato])->first();

        return $this->update($email->id, $detalhes);
    }

    /**
     * Deleta um ContatoEmail
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteContatoEmail(int $id): bool
    {
        $retorno = $this->delete($id);

        if(!$retorno) return false;

        return true;
    }
}
