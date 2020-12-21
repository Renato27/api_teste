<?php

namespace App\Repositories;

use App\Repositories\Contracts\UsuarioRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class UsuarioRepositoryImplementation implements UsuarioRepository
{

    use BaseEloquentRepository;

    /**
     * Retorna Usuario baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getUsuario(int $id): ?Model
    {
        return $this->find($id);
    }

    /**
     * Retorna uma coleção de Usuario baseado em uma associação.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Model|null
     */
    public function getUsuarios(): ?Collection
    {
        return $this->getAll();
    }

    /**
     * Cria um novo Usuario
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createUsuario(array $detalhes): ?Model
    {
        return $this->create([
            'email'                                 => $detalhes['email'],
            'senha'                                 => md5(sha1($detalhes['senha'])),
            'tipo_usuario_id'                       => $detalhes['tipo_usuario_id'],
            'funcionario_id'                        => $detalhes['funcionario_id'],
            'contato_id'                            => $detalhes['contato_id'],
            'cliente_visualizacao_patrimonio_id'    => $detalhes['cliente_visualizacao_patrimonio_id']
        ]);
    }

    /**
     * Atualiza um Usuario
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateUsuario(int $id, array $detalhes): ?Model
    {

    }

    /**
     * Deleta um Usuario
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteUsuario(int $id): bool
    {

    }

    public function verificarCredenciasUsuario(string $email, string $senha) : ?Model
    {
        //$usuario = $this->where(['email'.'@logicatecnologia.com.br' => $email])->first();
        $usuario = $this->where(['email' => $email])->first();

        if(!$usuario)
            return null;

        if(md5(sha1($senha)) != $usuario->senha)
            return null;

        return $usuario;
    }
}
