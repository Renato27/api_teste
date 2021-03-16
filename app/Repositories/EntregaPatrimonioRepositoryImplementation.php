<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use App\Models\EstadoPatrimonio\EstadoPatrimonio;
use App\Repositories\Contracts\EntregaPatrimonioRepository;

class EntregaPatrimonioRepositoryImplementation implements EntregaPatrimonioRepository
{
    use BaseEloquentRepository;

    /**
     * Retorna EntregaPatrimonio baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getEntregaPatrimonio(int $entrega, int $patrimonio): ?Model
    {
        return $this->where(['entrega_id' => $entrega, 'patrimonio_id' => $patrimonio])->first();
    }

    /**
     * Retorna uma coleção de EntregaPatrimonio baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getEntregaPatrimonios(int $entrega): ?Collection
    {
        return $this->where(['entrega_id' => $entrega])->get();
    }

    /**
     * Seta os patrimôniosda entrega como disponível e exclui da tabela.
     *
     * @param int $entrega
     * @return bool|null
     */
    public function setPatrimonioEntregaDisponivel(int $entrega) : ?bool
    {
        $patrimoniosEntrega = $this->where('entrega_id', $entrega)->get();

        foreach ($patrimoniosEntrega as $patrimonioEntrega) {
            $patrimonioEntrega->patrimonio->estado_patrimonio_id = EstadoPatrimonio::DISPONIVEL;
            $patrimonioEntrega->patrimonio->save();
            $patrimonioEntrega->delete();
        }

        return true;
    }

    /**
     * Seta os patrimôniosda entrega como alugado e exclui da tabela.
     *
     * @param int $entrega
     * @return bool|null
     */
    public function setPatrimonioEntregaAlugado(int $entrega) : ?bool
    {
        $patrimoniosEntrega = $this->where('entrega_id', $entrega)->get();

        foreach ($patrimoniosEntrega as $patrimonioEntrega) {
            $patrimonioEntrega->patrimonio->estado_patrimonio_id = EstadoPatrimonio::Alugado;
            $patrimonioEntrega->patrimonio->save();
            $patrimonioEntrega->delete();
        }

        return true;
    }

    /**
     * Retorna todos os patrimônios checados.
     *
     * @param int $entrega
     * @return Collection|null
     */
    public function getPatrimoniosChecked(int $entrega) : ?Collection
    {
        return $this->where(['entrega_id' => $entrega, 'checked' => 1])->get();
    }

    /**
     * Verifica se todos os patrimônios da entrega foram checados.
     *
     * @param int $entrega
     * @return bool
     */
    public function verififyIfAllPatrimoniosChecked(int $entrega) : bool
    {
        $checkeds = $this->getPatrimoniosChecked($entrega);
        $patrimonios = $this->getEntregaPatrimonios($entrega);

        if (count($checkeds) != count($patrimonios)) {
            return false;
        }

        return true;
    }

    /**
     * Cria um novo EntregaPatrimonio.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createEntregaPatrimonio(array $detalhes): ?Model
    {
        return $this->create($detalhes);
    }

    /**
     * Atualiza um EntregaPatrimonio.
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
     * Deleta um EntregaPatrimonio.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteEntregaPatrimonio(int $id): bool
    {
        $retorno = $this->delete($id);

        if (! $retorno) {
            return false;
        }

        return true;
    }
}
