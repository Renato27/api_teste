<?php

namespace App\Services\Usuario\CadastrarUsuario\Abstracts;

use App\Models\Usuario\Usuario;
use App\Services\Usuario\CadastrarUsuario\Base\CadastrarUsuarioServiceBase;
use Exception;

abstract class CadastrarUsuarioServiceAbstract extends CadastrarUsuarioServiceBase
{
    /**
     * Implementação do código para criação de usuário.
     *
     * @return Usuario
     */
    protected function cadastrarUsuario() : ?Usuario
    {
        $usuarioCadastrado = $this->UsuarioRepository->createUsuario($this->dados);

        if(!isset($usuarioCadastrado->id))
            throw new Exception("Não foi possível cadastrar o pedido. Verifique os dados e tente novamente.");

        return $usuarioCadastrado;
    }
}
