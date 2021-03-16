<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

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
    public function setUsuario(Usuario $Usuario): self;

    /**
     * Seta os dados para Usuario.
     *
     * @param array $dados
     * @return CadastrarUsuarioService;
     */
    public function setDados(array $dados): self;

    /**
     * Seta o repositório de UsuarioRepository.
     *
     * @param UsuarioRepository $UsuarioRepository
     * @return CadastrarUsuarioService
     */
    public function setUsuarioRepository(UsuarioRepository $UsuarioRepository): self;

    /**
     * Processa os dados.
     *
     * @return bool
     */
    public function handle(): ?Usuario;
}
