<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Services\Enderecos\ExcluirEndereco\Abstracts;

use Exception;
use App\Repositories\Contracts\EnderecoRepository;
use App\Services\Enderecos\ExcluirEndereco\Contracts\ExcluirEnderecoService;

abstract class ExcluirEnderecoServiceAbstract implements ExcluirEnderecoService
{
    /**
     * Repositório de endereço.
     *
     * @var EnderecoRepository
     */
    protected EnderecoRepository $enderecoRepository;

    /**
     * ID do endereço.
     *
     * @var int
     */
    protected int $endereco;

    /**
     * Seta um endereço.
     *
     * @param int $endereco
     * @return ExcluirEnderecoService
     */
    public function setEndereco(int $endereco) : ExcluirEnderecoService
    {
        $this->endereco = $endereco;

        return $this;
    }

    /**
     * Seta o repositório de endereço.
     *
     * @param EnderecoRepository $enderecoRepository
     * @return ExcluirEnderecoService
     */
    public function setEnderecoRepository(EnderecoRepository $enderecoRepository) : ExcluirEnderecoService
    {
        $this->enderecoRepository = $enderecoRepository;

        return $this;
    }

    /**
     * Processa a exclusão de um endereço.
     *
     * @return bool
     */
    protected function excluirEndereco() : bool
    {
        $endereco = $this->enderecoRepository->getEndereco($this->endereco);

        if (! isset($endereco->id)) {
            throw new Exception('O endereço a ser excluído não existe.');
        }

        $enderecoExcluido = $this->enderecoRepository->deleteEndereco($endereco->id);

        if (! $enderecoExcluido) {
            throw new Exception('Não foi possível excluir o endereço solicitado');
        }

        return $enderecoExcluido;
    }
}
