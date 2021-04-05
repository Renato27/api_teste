<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Services\Enderecos\AtualizarEndereco\Contracts;

use App\Models\Endereco\Endereco;
use App\Repositories\Contracts\EnderecoRepository;

interface AtualizarEnderecoService
{
    /**
     * Seta um endereço.
     *
     * @param int $endereco
     * @return AtualizarEnderecoService
     */
    public function setEndereco(int $endereco) : self;

    /**
     * Seta os dados a serem atualizados.
     *
     * @param array $dados
     * @return AtualizarEnderecoService
     */
    public function setDados(array $dados) : self;

    /**
     * Seta o repositório de endereço.
     *
     * @param EnderecoRepository $enderecoRepository
     * @return AtualizarEnderecoService
     */
    public function setEnderecoRepository(EnderecoRepository $enderecoRepository) : self;

    /**
     * Processa a atualização do endereço.
     *
     * @return Endereco|null
     */
    public function handle() : ?Endereco;
}
