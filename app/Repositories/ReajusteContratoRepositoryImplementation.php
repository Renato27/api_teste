<?php

namespace App\Repositories;

use App\Models\ReajusteContrato\ReajusteContrato;
use App\Repositories\Contracts\ReajusteContratoRepository;
use Carbon\CarbonImmutable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class ReajusteContratoRepositoryImplementation implements ReajusteContratoRepository
{

    use BaseEloquentRepository;

    /**
     * Retorna ReajusteContrato baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getReajusteContrato(int $id): ?Model
    {
        return $this->find($id);
    }

    /**
     * Retorna uma coleção de ReajusteContrato baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getReajusteContratos(int $id, int $associacao): ?Collection
    {
        return collect();
    }

    /**
     * Cria um novo ReajusteContrato
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createReajusteContrato(array $detalhes): ?Model
    {
        return $this->create($detalhes);
    }

    /**
     * Atualiza um ReajusteContrato
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateReajusteContrato(int $id, array $detalhes): ?Model
    {
        return $this->update($id, $detalhes);
    }

    /**
     * Deleta um ReajusteContrato
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteReajusteContrato(int $id): bool
    {
        $retorno = $this->delete($id);

        if (! $retorno) {
            return false;
        }

        return true;
    }

    /**
     * Retorna os reajustes próximos de vencer.
     *
     * @return Collection|null
     */
    public function reajusteVencimento(): ?Collection
    {
        return ReajusteContrato::whereNotNull('data_final')
        ->whereMonth('data_final', '<=', CarbonImmutable::today()->addMonthNoOverflow()->format('m'))
        ->whereYear('data_final', '<=', CarbonImmutable::today()->addMonthNoOverflow()->format('Y'))
        ->where('atualizado', 1)
        ->with('contrato:id,nome', 'contrato.cliente:cliente_id,nome_fantasia')
        ->select('id', 'contrato_id', 'data_final', 'indice', 'atualizado')
        ->selectRaw(DB::raw('DATEDIFF(data_final, CURRENT_TIMESTAMP()) as dias'))
        ->get();


    }
}
