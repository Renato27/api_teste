<?php

namespace App\Repositories;

use App\Models\EstadoPatrimonio\EstadoPatrimonio;
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
    public function getEntregaPatrimonio(int $entrega, int $patrimonio): ?Model
    {
        return $this->where(['entrega_id' => $entrega, 'patrimonio_id' => $patrimonio])->first();
    }

    /**
     * Retorna uma coleção de EntregaPatrimonio baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getEntregaPatrimonios(int $entrega): ?Collection
    {
        return $this->where(['entrega_id' => $entrega])->get();
    }

    /**
     * Seta os patrimôniosda entrega como disponível e exclui da tabela.
     *
     * @param integer $entrega
     * @return boolean|null
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
     * @param integer $entrega
     * @return boolean|null
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
     * @param integer $entrega
     * @return Collection|null
     */
    public function getPatrimoniosChecked(int $entrega) : ?Collection
    {
        return $this->where(['entrega_id' => $entrega, 'checked' => 1])->get();
    }

    /**
     * Verifica se todos os patrimônios da entrega foram checados.
     *
     * @param integer $entrega
     * @return boolean
     */
    public function verififyIfAllPatrimoniosChecked(int $entrega) : bool
    {
        $checkeds = $this->getPatrimoniosChecked($entrega);
        $patrimonios = $this->getEntregaPatrimonios($entrega);

        if(count($checkeds) != count($patrimonios)) return false;

        return true;
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
