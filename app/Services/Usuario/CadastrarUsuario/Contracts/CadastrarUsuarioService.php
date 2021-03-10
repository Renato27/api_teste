<?php

namespace App\Services\Usuario\CadastrarUsuario\Contracts;

use App\Models\Usuario\Usuario;
use App\Repositories\Contracts\UsuarioRepository;

interface CadastrarUsuarioService
{
    /**
     * Seta a model de Usuario.
     *
     * @param Usuario
     * @return CadastrarUsuarioService
     */
    public function setUsuario(Usuario $Usuario): CadastrarUsuarioService;

    /**
     * Seta os dados para Usuario.
     *
     * @param array $dados
     * @return CadastrarUsuarioService;
     */
    public function setDados(array $dados): CadastrarUsuarioService;

    /**
     * Seta o repositório de UsuarioRepository.
     *
     * @param UsuarioRepository $UsuarioRepository
     * @return CadastrarUsuarioService
     */
    public function setUsuarioRepository(UsuarioRepository $UsuarioRepository): CadastrarUsuarioService;

    /**
     * Processa os dados
     *
     * @return boolean
     */
    public function handle(): ?Usuario;
}
