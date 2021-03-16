<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Services\Enderecos\AtualizarEndereco\Abstracts;

use Exception;
use App\Models\Endereco\Endereco;
use App\Repositories\Contracts\EnderecoRepository;
use App\Services\Enderecos\AtualizarEndereco\Contracts\AtualizarEnderecoService;

abstract class AtualizarEnderecoServiceAbstract implements AtualizarEnderecoService
{
    /**
     * ID do endereço.
     *
     * @var int
     */
    protected int $endereco;

    /**
     * Dados a serem atualizados.
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
     * Seta um endereço.
     *
     * @param int $endereco
     * @return AtualizarEnderecoService
     */
    public function setEndereco(int $endereco) : AtualizarEnderecoService
    {
        $this->endereco = $endereco;

        return $this;
    }

    /**
     * Seta os dados a serem atualizados.
     *
     * @param array $dados
     * @return AtualizarEnderecoService
     */
    public function setDados(array $dados) : AtualizarEnderecoService
    {
        $dadosEndereco = [
            'rua' => $dados['rua'],
            'numero' => $dados['numero'],
            'bairro' => $dados['bairro'],
            'complemento' => $dados['complemento'],
            'cidade' => $dados['cidade'],
            'estado' => $dados['estado'],
            'cep' => $dados['cep'],
        ];

        $this->dados = $dadosEndereco;

        return $this;
    }

    /**
     * Seta o repositório de endereço.
     *
     * @param EnderecoRepository $enderecoRepository
     * @return AtualizarEnderecoService
     */
    public function setEnderecoRepository(EnderecoRepository $enderecoRepository) : AtualizarEnderecoService
    {
        $this->enderecoRepository = $enderecoRepository;

        return $this;
    }

    /**
     * Processa os dados para atualizar um endereço.
     *
     * @return Endereco
     */
    protected function atualizarEndereco() : Endereco
    {
        $endereco = $this->enderecoRepository->getEndereco($this->endereco);

        if (! isset($endereco->id)) {
            throw new Exception('O endereço solicitado para atualização não existe');
        }

        $enderecoAtualizado = $this->enderecoRepository->updateEndereco($endereco->id, $this->dados);

        if (! isset($enderecoAtualizado->id)) {
            throw new Exception('Não foi possivel atualizar o endereço solicitado');
        }

        return $enderecoAtualizado;
    }
}
