<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\Contracts\AberturaContadorPatrimonioRepository;

class AberturaContadorPatrimonioRepositoryImplementation implements AberturaContadorPatrimonioRepository
{
    use BaseEloquentRepository;

    /**
     * Retorna AberturaContadorPatrimonio baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getAberturaContadorPatrimonio(int $id): ?Model
    {
        return $this->find($id);
    }

    /**
     * Retorna uma coleção de AberturaContadorPatrimonio baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getAberturaContadorPatrimonios(int $abertura_contador): ?Collection
    {
        $abertura_patrimonios = $this->where(['abertura_contador_id' => $abertura_contador])->get();

        $patrimonios = collect();

        foreach ($abertura_patrimonios as $abertura_patrimonio) {
            $patrimonios->add($abertura_patrimonio->patrimonio_id);
        }

        if (count($patrimonios) < 1) {
            return null;
        }

        return $patrimonios;
    }

    /**
     * Cria um novo AberturaContadorPatrimonio.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createAberturaContadorPatrimonio(array $detalhes): ?Model
    {
        return $this->create($detalhes);
    }

    /**
     * Atualiza um AberturaContadorPatrimonio.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateAberturaContadorPatrimonio(int $id, array $detalhes): ?Model
    {
        return $this->update($id, $detalhes);
    }

    /**
     * Deleta um AberturaContadorPatrimonio.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteAberturaContadorPatrimonio(int $id): bool
    {
        $retorno = $this->delete($id);

        if (! $retorno) {
            return false;
        }

        return true;
    }
}
