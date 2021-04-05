<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface NotaSerasaRepository
{
    /**
     * Retorna NotaSerasa baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getNotaSerasa(int $id): ?Model;

    /**
     * Retorna uma coleção de NotaSerasa baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getNotaSerasas(int $id, int $associacao): ?Collection;

    /**
     * Cria um novo NotaSerasa
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createNotaSerasa(array $detalhes): ?Model;

    /**
     * Atualiza um NotaSerasa
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateNotaSerasa(int $id, array $detalhes): ?Model;

    /**
     * Deleta um NotaSerasa
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteNotaSerasa(int $id): bool;

    /**
	 * Retorna os clientes e todas as suas notas em protesto
	 *
	 * @param integer|null $cliente
	 * @return Collection|null
	 */
	public function getClienteNotasProtesto(?int $cliente = null) : ?Collection;
}
