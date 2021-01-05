<?php

namespace App\Repositories;

use App\Repositories\Contracts\ChamadoRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class ChamadoRepositoryImplementation implements ChamadoRepository
{

    use BaseEloquentRepository;

    /**
     * Retorna Chamado baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getChamado(int $id): ?Model
    {
        return $this->find($id);
    }

     /**
     * Retorna uma coleção de Chamado baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getChamadosByUsuario(int $usuario): ?Collection
    {
        return $this->where(['usuario_id' => $usuario])->get();
    }

    /**
     * Retorna uma coleção de Chamado baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getChamadosByTipo(int $tipo): ?Collection
    {
        return $this->where(['tipo_chamado_id' => $tipo])->get();
    }

    /**
     * Retorna uma coleção de Chamado baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getChamadosByContato(int $contato): ?Collection
    {
        return $this->where(['contato_id' => $contato])->get();
    }

    /**
     * Retorna uma coleção de Chamado baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getChamadosByEndereco(int $endereco): ?Collection
    {
        return $this->where(['endereco_id' => $endereco])->get();
    }

    /**
     * Retorna uma coleção de Chamado baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getChamadosByPedido(int $pedido): ?Collection
    {
        return $this->where(['pedido_id' => $pedido])->get();
    }

    /**
     * Cria um novo Chamado
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createChamado(array $detalhes): ?Model
    {
        return $this->create($detalhes);
    }

    /**
     * Atualiza um Chamado
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateChamado(int $id, array $detalhes): ?Model
    {
        return $this->update($id, $detalhes);
    }

    /**
     * Deleta um Chamado
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteChamado(int $id): bool
    {
        $retorno = $this->delete($id);

        if(!$retorno) return false;

        return true;
    }
}
