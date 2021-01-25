<?php

namespace App\Repositories;

use App\Repositories\Contracts\EntregaPatrimonioRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class EntregaPatrimonioRepositoryImplementation implements EntregaPatrimonioRepository
{

    use BaseEloquentRepository;

    /**
     * Retorna EntregaPatrimonio baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getEntregaPatrimonio(int $entrega): ?Model
    {
        return $this->where(['entrega_id' => $entrega])->first();
    }

    /**
     * Retorna uma coleção de EntregaPatrimonio baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getEntregaPatrimonios(int $patrimonio): ?Collection
    {
        return $this->where(['patrimonio_id' => $patrimonio])->get();
    }

    /**
     * Cria um novo EntregaPatrimonio
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createEntregaPatrimonio(array $detalhes): ?Model
    {
        return $this->create($detalhes);
    }

    /**
     * Atualiza um EntregaPatrimonio
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateEntregaPatrimonio(int $id, array $detalhes): ?Model
    {
        return $this->update($id, $detalhes);
    }

    /**
     * Deleta um EntregaPatrimonio
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteEntregaPatrimonio(int $id): bool
    {
        $retorno = $this->delete($id);

        if(!$retorno) return false;

        return true;
    }
}
