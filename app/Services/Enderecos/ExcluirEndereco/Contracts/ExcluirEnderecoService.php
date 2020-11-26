<?php

namespace App\Services\Enderecos\ExcluirEndereco\Contracts;

use App\Repositories\Contracts\EnderecoRepository;

interface ExcluirEnderecoService
{
    /**
     * Seta um endereço.
     *
     * @param integer $endereco
     * @return ExcluirEnderecoService
     */
    public function setEndereco(int $endereco) : ExcluirEnderecoService;

    /**
     * Seta o repositório de endereço.
     *
     * @param EnderecoRepository $enderecoRepository
     * @return ExcluirEnderecoService
     */
    public function setEnderecoRepository(EnderecoRepository $enderecoRepository) : ExcluirEnderecoService;

    /**
     * Processa a exclusão de um endereço.
     *
     * @return boolean
     */
    public function handle() : bool;
}
