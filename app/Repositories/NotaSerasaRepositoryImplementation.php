<?php

namespace App\Repositories;

use App\Models\NotaSerasa\NotaSerasa;
use App\Repositories\Contracts\NotaSerasaRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class NotaSerasaRepositoryImplementation implements NotaSerasaRepository
{

    use BaseEloquentRepository;

    /**
     * Retorna NotaSerasa baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getNotaSerasa(int $id): ?Model
    {
        return $this->find($id);
    }

    /**
     * Retorna uma coleção de NotaSerasa baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getNotaSerasas(int $id, int $associacao): ?Collection
    {
        return collect();
    }

    /**
     * Cria um novo NotaSerasa
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createNotaSerasa(array $detalhes): ?Model
    {
        return $this->create($detalhes);
    }

    /**
     * Atualiza um NotaSerasa
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateNotaSerasa(int $id, array $detalhes): ?Model
    {
        return $this->update($id, $detalhes);
    }

    /**
     * Deleta um NotaSerasa
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteNotaSerasa(int $id): bool
    {
        $retorno = $this->delete($id);

        if (! $retorno) {
            return false;
        }

        return true;
    }

     /**
	 * Retorna os clientes e todas as suas notas em protesto
	 *
	 * @param integer|null $cliente
	 * @return Collection|null
	 */
	public function getClienteNotasProtesto(?int $cliente = null) : ?Collection
	{
        if(is_null($cliente)){
            return NotaSerasa::with(['cliente:id,nome_fantasia', 'nota:id,data_vencimento'])
            ->select('id', 'cliente_id', 'nota_id', 'created_at')->get();
        }

        return NotaSerasa::with(['cliente:id,nome_fantasia', 'nota:id,data_vencimento'])
        ->where('cliente_id', $cliente)
        ->select('id', 'cliente_id', 'nota_id', 'created_at')
        ->get();

	}
}
