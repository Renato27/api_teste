<?php

namespace App\Services\Usuario\CadastrarUsuario\Base;

use App\Services\Usuario\CadastrarUsuario\Contracts\CadastrarUsuarioService;
use App\Models\Usuario\Usuario;
use App\Repositories\Contracts\UsuarioRepository;
use Illuminate\Support\Facades\Hash;

abstract class CadastrarUsuarioServiceBase implements CadastrarUsuarioService
{
    /**
     * Model de Usuario.
     *
     * @var Usuario
     */
    protected Usuario $Usuario;

    /**
     * Array de dados.
     *
     * @var array
     */
    protected array $dados;

    /**
     * Repositório de UsuarioRepository.
     *
     * @var Usuario
     */
    protected UsuarioRepository $UsuarioRepository;

   /**
     * Seta a model de Usuario.
     *
     * @param Usuario
     * @return CadastrarUsuarioService
     */
    public function setUsuario(Usuario $Usuario): CadastrarUsuarioService
    {
        $this->Usuario = $Usuario;
        return $this;
    }

    /**
     * Seta os dados para Usuario.
     *
     * @param array $dados
     * @return CadastrarUsuarioService;
     */
    public function setDados(array $dados): CadastrarUsuarioService
    {
        $dadosUsuario = [
            'email'                                 => $dados['email'],
            'password'                              => Hash::make($dados['password']),
            'tipo_usuario_id'                       => $dados['tipo_usuario_id'],
            'funcionario_id'                        => $dados['funcionario_id'],
            'contato_id'                            => $dados['contato_id'],
            'cliente_visualizacao_patrimonio_id'    => $dados['cliente_visualizacao_patrimonio_id']
        ];
        $this->dados = $dadosUsuario;
        return $this;
    }

    /**
     * Seta o repositório de UsuarioRepository.
     *
     * @param UsuarioRepository $UsuarioRepository
     * @return CadastrarUsuarioService
     */
    public function setUsuarioRepository(UsuarioRepository $UsuarioRepository): CadastrarUsuarioService
    {
        $this->UsuarioRepository = $UsuarioRepository;
        return $this;
    }
}
