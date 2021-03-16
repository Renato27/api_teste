<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Services\Usuario\CadastrarUsuario;

use App\Models\Usuario\Usuario;
use Illuminate\Support\Facades\DB;
use App\Services\Usuario\CadastrarUsuario\Abstracts\CadastrarUsuarioServiceAbstract;

class CadastrarUsuarioService extends CadastrarUsuarioServiceAbstract
{
    /**
     * Processa os dados.
     *
     * @return bool
     */
    public function handle(): ?Usuario
    {
        $usuario = null;

        DB::transaction(function () use (&$usuario) {
            $usuario = $this->cadastrarUsuario();
        });

        return $usuario;
    }
}
