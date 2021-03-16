<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories;

use Carbon\CarbonImmutable;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\Contracts\NotaEspelhoRepository;

class NotaEspelhoRepositoryImplementation implements NotaEspelhoRepository
{
    use BaseEloquentRepository;

    /**
     * Retorna NotaEspelho baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getNotaEspelho(int $id): ?Model
    {
        return $this->find($id);
    }

    /**
     * Retorna uma coleção de NotaEspelho baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getNotaEspelhos(int $id, int $associacao): ?Collection
    {
        return collect();
    }

    /**
     * Cria um novo NotaEspelho.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createNotaEspelho(array $detalhes): ?Model
    {
        return $this->create($detalhes);
    }

    /**
     * Atualiza um NotaEspelho.
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
     * Deleta um NotaEspelho.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteNotaEspelho(int $id): bool
    {
        $retorno = $this->delete($id);

        if (! $retorno) {
            return false;
        }

        return true;
    }

    /**
     * Verifica se uma nota espelho está disponivel para ser reemitida.
     *
     * @param int $valorDeBusca
     * @param bool $medicao
     * @return bool
     */
    public function ultimoEspelhoTemMaisDe30Dias(int $valorDeBusca, ?bool $medicao = false, ?bool $recorrencia = false, ?bool $provisionamento = false): bool
    {
        if ($provisionamento) {
            return true;
        }

        if ($medicao) {
            $colunaDeBusca = 'contrato_id';
        }

        if ($recorrencia) {
            $colunaDeBusca = 'espelho_recorrente_id';
        }

        $retorno = $this->model->where($colunaDeBusca, $valorDeBusca)->latest()->first();

        if (! isset($retorno->id) || $retorno->nota_espelho_estado_id == 3) {
            return true;
        }

        $hoje = CarbonImmutable::today();
        $criacao = CarbonImmutable::parse($retorno->data_emissao);

        if ($hoje->lessThan($criacao->addMonthNoOverflow()->subDay())) {
            return false;
        }

        return true;
    }
}
