<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories\Contracts;

use App\Models\Nota\Nota;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

interface NotaRepository
{
    /**
     * Retorna Nota baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getNota(int $id): ?Model;

    /**
     * Retorna uma coleção de Notas.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getNotas(): ?Collection;

    /**
     * Cria um novo Nota.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createNota(array $detalhes): ?Model;

    /**
     * Atualiza um Nota.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateNota(int $id, array $detalhes): ?Model;

    /**
     * Deleta um Nota.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteNota(int $id): bool;

    /**
     * Retorna os dados para gerar um gráfico de monitoramento das notas do mês.
     *
     * @return array|null
     */
    public function getNotasGrafico(): ?array;

     /**
	 * Retorna os clientes com notas vencidas a mais de 10 dias
	 *
	 * @param integer|null $cliente
	 * @return Collection|null
	 */
	public function getClientesNotaVencidaAMais10dias(?int $cliente = null) : ?Collection;

     /**
     * Undocumented function
     *
     * @return Collection|null
     */
    public function notasVencidas7Dias() : ?Collection;

    /**
     * Retorna Endereco e contato (telefone e celular) para o nota show.
     *
     * @param Nota $nota
     * @return Collection|null
     */
    public function showNota(Nota $nota) : ?Collection;

    /**
     * Undocumented function
     *
     * @param integer $cliente
     * @return Collection|null
     */
    public function notaEndereco(int $cliente) : ?Collection;

    /**
     * Undocumented function
     *
     * @param integer $cliente
     * @return model|null
     */
    public function notaTelefoneOuCelular(int $cliente) : ?model;
}
