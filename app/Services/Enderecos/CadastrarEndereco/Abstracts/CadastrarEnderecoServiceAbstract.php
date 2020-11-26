<?php

namespace App\Services\Enderecos\CadastrarEndereco\Abstracts;

use App\Models\Endereco\Endereco;
use App\Repositories\Contracts\EnderecoRepository;
use App\Services\Enderecos\CadastrarEndereco\Contracts\CadastrarEnderecoService;
use Exception;

abstract class CadastrarEnderecoServiceAbstract implements CadastrarEnderecoService
{

    /**
     * Dados do endereço.
     *
     * @var array
     */
    protected array $dados;

    /**
     * Repositório de endereço.
     *
     * @var EnderecoRepository
     */
    protected EnderecoRepository $enderecoRepository;

    /**
     * Seta os dados do endereço.
     *
     * @param array $dados
     * @return CadastrarEnderecoService
     */
    public function setDados(array $dados) : CadastrarEnderecoService
    {
        $dadosEndereco = [
            'rua'           => $dados['rua'],
            'numero'        => $dados['numero'],
            'bairro'        => $dados['bairro'],
            'complemento'   => $dados['complemento'],
            'cidade'        => $dados['cidade'],
            'estado'        => $dados['estado'],
            'cep'           => $dados['cep'],
          
        ];

        $this->dados = $dadosEndereco;

        return $this;
    }

    /**
     * Seta o repositório de endereço.
     *
     * @param EnderecoRepository $enderecoRepository
     * @return CadastrarEnderecoService
     */
    public function setEnderecoRepository(EnderecoRepository $enderecoRepository) : CadastrarEnderecoService
    {
        $this->enderecoRepository = $enderecoRepository;

        return $this;
    }

    /**
     * Processa os dados para cadastro do endereço.
     *
     * @return Endereco
     */
    protected function cadastrarEndereco() : Endereco
    {
        $enderecoCadastrado = $this->enderecoRepository->createEndereco($this->dados);

        if(!isset($enderecoCadastrado->id))
            throw new Exception("Não foi possível cadastrar os dados do endereço.");

        return $enderecoCadastrado;    
    }
}
