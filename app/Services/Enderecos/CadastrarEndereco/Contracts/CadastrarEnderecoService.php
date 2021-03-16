<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

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
    public function setDados(array $dados) : self;

    /**
     * Seta o repositório de endereço.
     *
     * @param EnderecoRepository $enderecoRepository
     * @return CadastrarEnderecoService
     */
    public function setEnderecoRepository(EnderecoRepository $enderecoRepository) : self;

    /**
     * Processa o cadastro do endereço.
     *
     * @return Endereco
     */
    public function handle() : ?Endereco;
}
