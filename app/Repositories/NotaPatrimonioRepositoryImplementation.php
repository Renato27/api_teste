<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\Contracts\NotaPatrimonioRepository;

class NotaPatrimonioRepositoryImplementation implements NotaPatrimonioRepository
{
    use BaseEloquentRepository;

    /**
     * Retorna NotaPatrimonio baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getNotaPatrimonio(int $id): ?Model
    {
        return $this->find($id);
    }

    /**
     * Retorna uma coleção de NotaPatrimonio baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getNotaPatrimonios(int $nota): ?Collection
    {
        return $this->where(['nota_id' => $nota])->get();
    }

    /**
     * Cria um novo NotaPatrimonio.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createNotaPatrimonio(array $detalhes): ?Model
    {
        return $this->create($detalhes);
    }

    /**
     * Atualiza um NotaPatrimonio.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateNotaPatrimonio(int $id, array $detalhes): ?Model
    {
        return $this->update($id, $detalhes);
    }

    /**
     * Deleta um NotaPatrimonio.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteNotaPatrimonio(int $id): bool
    {
        $retorno = $this->delete($id);

        if (! $retorno) {
            return false;
        }

        return true;
    }

    /**
     * Retorna o último faturamento válido de um patrimonio.
     *
     * @param int $patrimonio
     * @return Model|null
     */
    public function getUltimoFaturamentoValido(int $patrimonio, ?int $cliente = null): ?Model
    {
        $notaPatrimonio = $this->model->whereHas('nota', function ($query) use ($cliente) {
            $query->where('nota_estado_id', '<>', 4);
        })->where(['patrimonio_id' => $patrimonio])->latest()->first();

        if (isset($notaPatrimonio->id) && $notaPatrimonio->nota->cliente_id == $cliente) {
            return $notaPatrimonio;
        }

        return null;
    }
}
