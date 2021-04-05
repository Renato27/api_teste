<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Services\Enderecos\ExcluirEndereco\Contracts;

use App\Repositories\Contracts\EnderecoRepository;

interface ExcluirEnderecoService
{
    /**
     * Seta um endereço.
     *
     * @param int $endereco
     * @return ExcluirEnderecoService
     */
    public function setEndereco(int $endereco) : self;

    /**
     * Seta o repositório de endereço.
     *
     * @param EnderecoRepository $enderecoRepository
     * @return ExcluirEnderecoService
     */
    public function setEnderecoRepository(EnderecoRepository $enderecoRepository) : self;

    /**
     * Processa a exclusão de um endereço.
     *
     * @return bool
     */
    public function handle() : bool;
}
