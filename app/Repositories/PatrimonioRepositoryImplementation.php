<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use App\Models\EstadoPatrimonio\EstadoPatrimonio;
use App\Repositories\Contracts\PatrimonioRepository;

class PatrimonioRepositoryImplementation implements PatrimonioRepository
{
    use BaseEloquentRepository;

    /**
     * Retorna Patrimonio baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getPatrimonio(int $id): ?Model
    {
        return $this->find($id);
    }

    /**
     * Retorna uma coleção de Patrimonio baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getPatrimonios(): ?Collection
    {
        return $this->getAll();
    }

    /**
     * Cria um novo Patrimonio.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createPatrimonio(array $detalhes): ?Model
    {
        return $this->create($detalhes);
    }

    /**
     * Atualiza um Patrimonio.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updatePatrimonio(int $id, array $detalhes): ?Model
    {
        return $this->update($id, $detalhes);
    }

    /**
     * Deleta um Patrimonio.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deletePatrimonio(int $id): bool
    {
        $retorno = $this->delete($id);

        if (! $retorno) {
            return false;
        }

        return true;
    }

    /**
     * Seta um patrimônio como disponível.
     *
     * @param Model $model
     * @return bool
     */
    public function setDisponivel(Model $model): bool
    {
        $model->estado_patrimonio_id = EstadoPatrimonio::DISPONIVEL;
        $model->save();

        if ($model->estado_patrimonio_id != EstadoPatrimonio::DISPONIVEL) {
            return false;
        }

        return true;
    }

    /**
     * Seta um patrimônio como disponível.
     *
     * @param Model $model
     * @return bool
     */
    public function setAlugado(Model $model): bool
    {
        $model->estado_patrimonio_id = EstadoPatrimonio::Alugado;
        $model->save();

        if ($model->estado_patrimonio_id != EstadoPatrimonio::Alugado) {
            return false;
        }

        return true;
    }
}
