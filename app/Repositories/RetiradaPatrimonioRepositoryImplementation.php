<?php

namespace App\Repositories;

use App\Repositories\Contracts\RetiradaPatrimonioRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class RetiradaPatrimonioRepositoryImplementation implements RetiradaPatrimonioRepository
{

    use BaseEloquentRepository;

    /**
     * Retorna RetiradaPatrimonio baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getRetiradaPatrimonio(int $retirada): ?Model
    {
        return $this->where(['retirada_id' => $retirada])->first();
    }

    /**
     * Retorna uma coleção de RetiradaPatrimonio baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getRetiradaPatrimonios(int $patrimonio): ?Collection
    {
        return $this->where(['patrimonio_id' => $patrimonio])->get();
    }

    /**
     * Cria um novo RetiradaPatrimonio
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createRetiradaPatrimonio(array $detalhes): ?Model
    {
        return $this->create($detalhes);
    }

    /**
     * Atualiza um RetiradaPatrimonio
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateRetiradaPatrimonio(int $id, array $detalhes): ?Model
    {
        return $this->update($id, $detalhes);
    }

    /**
     * Deleta um RetiradaPatrimonio
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteRetiradaPatrimonio(int $id): bool
    {
        $retorno = $this->delete($id);

        if(!$retorno) return false;

        return true;
    }
}
