<?php

namespace App\Services\Enderecos\ExcluirEndereco\Abstracts;

use App\Repositories\Contracts\EnderecoRepository;
use App\Services\Enderecos\ExcluirEndereco\Contracts\ExcluirEnderecoService;
use Exception;

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
     * @var integer
     */
    protected int $endereco;

    /**
     * Seta um endereço.
     *
     * @param integer $endereco
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
     * @return boolean
     */
    protected function excluirEndereco() : bool
    {
        $endereco = $this->enderecoRepository->getEndereco($this->endereco);

        if(!isset($endereco->id))
            throw new Exception("O endereço a ser excluído não existe.");

        $enderecoExcluido = $this->enderecoRepository->deleteEndereco($endereco->id);
        
        if(!$enderecoExcluido)
            throw new Exception("Não foi possível excluir o endereço solicitado");

        return $enderecoExcluido;    
    }
}
