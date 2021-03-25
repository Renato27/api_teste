<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories;

use App\Models\Chamado\Chamado;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\Contracts\ChamadoRepository;

class ChamadoRepositoryImplementation implements ChamadoRepository
{
    use BaseEloquentRepository;

    /**
     * Retorna Chamado baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getChamado(int $id): ?Model
    {
        return $this->find($id);
    }

    /**
     * Retorna uma coleção de Chamado baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getChamadosByUsuario(int $usuario): ?Collection
    {
        return $this->where(['usuario_id' => $usuario])->get();
    }

    /**
     * Retorna uma coleção de Chamado baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getChamadosByTipo(int $tipo): ?Collection
    {
        return $this->where(['tipo_chamado_id' => $tipo])->get();
    }

    /**
     * Retorna uma coleção de Chamado baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getChamadosByContato(int $contato): ?Collection
    {
        return $this->where(['contato_id' => $contato])->get();
    }

    /**
     * Retorna uma coleção de Chamado baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getChamadosByEndereco(int $endereco): ?Collection
    {
        return $this->where(['endereco_id' => $endereco])->get();
    }

    /**
     * Retorna uma coleção de Chamado baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getChamadosByPedido(int $pedido): ?Collection
    {
        return $this->where(['pedido_id' => $pedido])->get();
    }

    /**
     * Cria um novo Chamado.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createChamado(array $detalhes): ?Model
    {
        return $this->create($detalhes);
    }

    /**
     * Atualiza um Chamado.
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
     * Deleta um Chamado.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteChamado(int $id): bool
    {
        $retorno = $this->delete($id);

        if (! $retorno) {
            return false;
        }

        return true;
    }

    /**
     * Retorna uma coleção de chamados para a dashboard.
     *
     * @return Collection|null
     */
    public function getChamadosDashboardGestao() : ?Collection
    {
        return Chamado::whereHas('status_chamado', function ($query) {
            return $query->where('id', '<>', 5)->where('id', '<>', 6);
        })->with(['cliente:id,nome_fantasia', 'tipo_chamado:id,nome'])
        ->select('id', 'data_acao', 'mensagem', 'cliente_id', 'status_chamado_id', 'tipo_chamado_id', 'created_at')->get();
    }

    /**
     * Retorna uma coleção de chamados para a dashboard.
     *
     * @return Collection|null
     */
    public function getChamadosDashboardSuporteNivel2(?int $usuario = null) : ?Collection
    {

        if(is_null($usuario)){
            return Chamado::whereHas('status_chamado', function ($query) {
                return $query->where('id', 1);
            })->with(['cliente:id,nome_fantasia', 'tipo_chamado:id,nome'])
            ->select('id', 'cliente_id', 'tipo_chamado_id')->get();
        }

        return Chamado::whereHas('status_chamado', function ($query) {
            return $query->where('id', 1);
        })
        ->where('usuario_id', $usuario)
        ->with(['cliente:id,nome_fantasia', 'tipo_chamado:id,nome'])
        ->select('id', 'cliente_id', 'tipo_chamado_id')->get();
    }

    /**
     * Retorna os chamados para dashboard de assistente.
     *
     * @return Collection|null
     */
    public function getChamadosDashboardAssistente() : ?Collection
    {
        return Chamado::doesntHave('arquivos')
            ->where('status_chamado_id', 2)
            ->where('tipo_chamado_id', '<>', 7)
            ->with(['cliente:id,nome_fantasia', 'tipo_chamado:id,nome'])
            ->select('id', 'cliente_id', 'tipo_chamado_id')
            ->get();
    }
}
