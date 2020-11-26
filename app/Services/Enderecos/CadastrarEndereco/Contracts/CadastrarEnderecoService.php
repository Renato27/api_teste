<?php

namespace App\Services\Enderecos\CadastrarEndereco\Contracts;

use App\Models\Endereco\Endereco;
use App\Repositories\Contracts\EnderecoRepository;

interface CadastrarEnderecoService
{   
    /**
     * Seta os dados do endereço.
     *
     * @param array $dados
     * @return CadastrarEnderecoService
     */
    public function setDados(array $dados) : CadastrarEnderecoService;

    /**
     * Seta o repositório de endereço.
     *
     * @param EnderecoRepository $enderecoRepository
     * @return CadastrarEnderecoService
     */
    public function setEnderecoRepository(EnderecoRepository $enderecoRepository) : CadastrarEnderecoService;

    /**
     * Processa o cadastro do endereço.
     *
     * @return Endereco
     */
    public function handle() : ?Endereco;
}
