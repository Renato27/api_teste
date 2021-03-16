<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Repositories;

use App\Models\Usuario\Usuario;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\Contracts\UsuarioRepository;

class UsuarioRepositoryImplementation implements UsuarioRepository
{
    use BaseEloquentRepository;

    /**
     * Retorna Usuario baseado no ID.
     *
     * @param int $id
     * @return Model|null
     */
    public function getUsuario(int $id): ?Model
    {
        return $this->find($id);
    }

    /**
     * Retorna uma coleção de Usuario baseado em uma associação.
     *
     * @param int $id
     * @param int $segundo_recurso
     * @return Model|null
     */
    public function getUsuarios(): ?Collection
    {
        return $this->getAll();
    }

    /**
     * Cria um novo Usuario.
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createUsuario(array $detalhes): ?Model
    {
        // dd($detalhes);
        return Usuario::create($detalhes);
    }

    /**
     * Atualiza um Usuario.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateUsuario(int $id, array $detalhes): ?Model
    {
        return $this->update($id, $detalhes);
    }

    /**
     * Deleta um Usuario.
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function deleteUsuario(int $id): bool
    {
        $retorno = $this->delete($id);

        if (! $retorno) {
            return false;
        }

        return true;
    }

    public function verificarCredenciasUsuario(string $email, string $password) : ?Model
    {
        //$usuario = $this->where(['email'.'@logicatecnologia.com.br' => $email])->first();
        $usuario = $this->where(['email' => $email])->first();

        if (! $usuario) {
            return null;
        }

        if (md5(sha1($password)) != $usuario->password) {
            return null;
        }

        return $usuario;
    }
}
