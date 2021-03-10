<?php

namespace App\Services\Usuario\CadastrarUsuario;

use App\Models\Usuario\Usuario;
use App\Services\Usuario\CadastrarUsuario\Abstracts\CadastrarUsuarioServiceAbstract;
use Illuminate\Support\Facades\DB;

class CadastrarUsuarioService extends CadastrarUsuarioServiceAbstract
{
    /**
     * Processa os dados
     *
     * @return boolean
     */
    public function handle(): ?Usuario
    {
        $usuario = null;

        DB::transaction(function () use(&$usuario){

            $usuario = $this->cadastrarUsuario();
        });

        return $usuario;
    }
}
