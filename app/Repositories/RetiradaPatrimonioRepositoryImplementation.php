<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use App\Models\EstadoPatrimonio\EstadoPatrimonio;
use App\Repositories\Contracts\RetiradaPatrimonioRepository;

class RetiradaPatrimonioRepositoryImplementation implements RetiradaPatrimonioRepository
{
    use BaseEloquentRepository;

    /**
     * Retorna RetiradaPatrimonio baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getRetiradaPatrimonio(int $retirada): ?Model
    {
        return $this->where(['retirada_id' => $retirada])->first();
    }

    /**
     * Retorna uma coleção de RetiradaPatrimonio baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getRetiradaPatrimonios(int $patrimonio): ?Collection
    {
        return $this->where(['patrimonio_id' => $patrimonio])->get();
    }

    /**
     * Cria um novo RetiradaPatrimonio.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createRetiradaPatrimonio(array $detalhes): ?Model
    {
        return $this->create($detalhes);
    }

    /**
     * Atualiza um RetiradaPatrimonio.
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
     * Deleta um RetiradaPatrimonio.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteRetiradaPatrimonio(int $id): bool
    {
        $retorno = $this->delete($id);

        if (! $retorno) {
            return false;
        }

        return true;
    }

    /**
     * Seta os patrimônios da retirada como alugado e exclui da tabela.
     *
     * @param int $retirada
     * @return bool|null
     */
    public function setPatrimonioRetiradaAlugado(int $retirada) : ?bool
    {
        $patrimoniosRetirada = $this->where('retirada_id', $retirada)->get();

        foreach ($patrimoniosRetirada as $patrimonioRetirada) {
            $patrimonioRetirada->patrimonio->estado_patrimonio_id = EstadoPatrimonio::Alugado;
            $patrimonioRetirada->patrimonio->save();
            $patrimonioRetirada->delete();
        }

        return true;
    }

    /**
     * Seta os patrimônios da retirada como disponível e exclui da tabela.
     *
     * @param int $entrega
     * @return bool|null
     */
    public function setPatrimonioRetiradaDisponivel(int $retirada) : ?bool
    {
        $patrimoniosRetirada = $this->where('retirada_id', $retirada)->get();

        foreach ($patrimoniosRetirada as $patrimonioRetirada) {
            $patrimonioRetirada->patrimonio->estado_patrimonio_id = EstadoPatrimonio::DISPONIVEL;
            $patrimonioRetirada->patrimonio->save();
            $patrimonioRetirada->delete();
        }

        return true;
    }
}
