<?php

namespace App\Repositories;

use App\Repositories\Contracts\ChamadoArquivoRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class ChamadoArquivoRepositoryImplementation implements ChamadoArquivoRepository
{

    use BaseEloquentRepository;

    /**
     * Retorna ChamadoArquivo baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getArquivosByChamado(int $chamado): ?Collection
    {
        return $this->where(['chamado_id' => $chamado])->get();
    }

    /**
     * Retorna ChamadoArquivo baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getArquivosByUsuario(int $usuario): ?Collection
    {
        return $this->where(['usuario_id' => $usuario])->get();
    }

    /**
     * Cria um novo ChamadoArquivo
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createChamadoArquivo(array $detalhes): ?Model
    {
        return $this->create($detalhes);
    }

    /**
     * Atualiza um ChamadoArquivo
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateChamadoArquivo(int $id, array $detalhes): ?Model
    {
        return $this->update($id, $detalhes);
    }

    /**
     * Deleta um ChamadoArquivo
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteChamadoArquivo(int $id): bool
    {
        $retorno = $this->delete($id);

        if(!$retorno) return false;

        return true;
    }
}
