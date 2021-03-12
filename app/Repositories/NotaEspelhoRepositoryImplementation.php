<?php

namespace App\Repositories;

use App\Repositories\Contracts\NotaEspelhoRepository;
use Carbon\CarbonImmutable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class NotaEspelhoRepositoryImplementation implements NotaEspelhoRepository
{
    use BaseEloquentRepository;

    /**
     * Retorna NotaEspelho baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getNotaEspelho(int $id): ?Model
    {
        return $this->find($id);
    }

    /**
     * Retorna uma coleção de NotaEspelho baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getNotaEspelhos(int $id, int $associacao): ?Collection
    {
        return collect();
    }

    /**
     * Cria um novo NotaEspelho
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createNotaEspelho(array $detalhes): ?Model
    {
        return $this->create($detalhes);
    }

    /**
     * Atualiza um NotaEspelho
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateNotaEspelho(int $id, array $detalhes): ?Model
    {
        return $this->update($id, $detalhes);
    }

    /**
     * Deleta um NotaEspelho
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteNotaEspelho(int $id): bool
    {
        $retorno = $this->delete($id);

        if(!$retorno) return false;

        return true;
    }

     /**
     * Verifica se uma nota espelho está disponivel para ser reemitida.
     *
     * @param integer $valorDeBusca
     * @param boolean $medicao
     * @return boolean
     */
    public function ultimoEspelhoTemMaisDe30Dias(int $valorDeBusca, ?bool $medicao = false, ?bool $recorrencia = false, ?bool $provisionamento = false): bool
    {
        if($provisionamento) return true;

        if($medicao) $colunaDeBusca = 'contrato_id';

        if($recorrencia) $colunaDeBusca = 'espelho_recorrente_id';

        $retorno = $this->model->where($colunaDeBusca, $valorDeBusca)->latest()->first();

        if(!isset($retorno->id) || $retorno->nota_espelho_estado_id == 3) return true;

        $hoje       = CarbonImmutable::today();
        $criacao = CarbonImmutable::parse($retorno->data_emissao);

        if($hoje->lessThan($criacao->addMonthNoOverflow()->subDay())) return false;

        return true;
    }
}
