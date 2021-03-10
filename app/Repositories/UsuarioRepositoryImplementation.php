<?php

namespace App\Repositories;

use App\Models\Usuario\Usuario;
use App\Repositories\Contracts\UsuarioRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Hash;

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
        // dd($detalhes);
        return Usuario::create($detalhes);

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
        return $this->update($id, $detalhes);
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
        $retorno = $this->delete($id);

        if(!$retorno) return false;

        return true;
    }

    public function verificarCredenciasUsuario(string $email, string $password) : ?Model
    {
        //$usuario = $this->where(['email'.'@logicatecnologia.com.br' => $email])->first();
        $usuario = $this->where(['email' => $email])->first();

        if(!$usuario)
            return null;

        if(md5(sha1($password)) != $usuario->password)
            return null;

        return $usuario;
    }
}
