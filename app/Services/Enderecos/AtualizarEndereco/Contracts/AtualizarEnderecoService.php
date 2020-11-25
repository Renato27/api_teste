<?php

namespace App\Services\Enderecos\AtualizarEndereco\Contracts;

use App\Models\Endereco\Endereco;
use App\Repositories\Contracts\EnderecoRepository;

interface AtualizarEnderecoService
{
    /**
     * Seta um endereço.
     *
     * @param integer $endereco
     * @return AtualizarEnderecoService
     */
    public function setEndereco(int $endereco) : AtualizarEnderecoService;

    /**
     * Seta os dados a serem atualizados.
     *
     * @param array $dados
     * @return AtualizarEnderecoService
     */
    public function setDados(array $dados) : AtualizarEnderecoService;

    /**
     * Seta o repositório de endereço.
     *
     * @param EnderecoRepository $enderecoRepository
     * @return AtualizarEnderecoService
     */
    public function setEnderecoRepository(EnderecoRepository $enderecoRepository) : AtualizarEnderecoService;

    /**
     * Processa a atualização do endereço.
     *
     * @return Endereco|null
     */
    public function handle() : ?Endereco;
}
