<?php

namespace App\Services\Chamado\AtualizarChamado\Base;

use App\Services\Chamado\AtualizarChamado\Contracts\AtualizarChamadoService;
use App\Models\Chamado\Chamado;
use App\Repositories\Contracts\ChamadoRepository;

abstract class AtualizarChamadoServiceBase implements AtualizarChamadoService
{
    /**
     * Model de Chamado.
     *
     * @var Chamado
     */
    protected Chamado $Chamado;

    /**
     * Array de dados.
     *
     * @var array
     */
    protected array $dados;

    /**
     * Array de patrimônios
     *
     * @var array
     */
    protected array $patrimonio_adicionar;

    /**
     * Array de patrimônios
     *
     * @var array
     */
    protected array $patrimonio_retirar;

    /**
     * dados para gerar uma interação.
     *
     * @var array
     */
    protected array $dadosInteracoes;

    /**
     * Repositório de ChamadoRepository.
     *
     * @var Chamado
     */
    protected ChamadoRepository $ChamadoRepository;

   /**
     * Seta a model de Chamado.
     *
     * @param Chamado
     * @return AtualizarChamadoService
     */
    public function setChamado(Chamado $Chamado): AtualizarChamadoService
    {
        $this->Chamado = $Chamado;
        return $this;
    }

    /**
     * Seta os dados para Chamado.
     *
     * @param array $dados
     * @return AtualizarChamadoService;
     */
    public function setDados(array $dados): AtualizarChamadoService
    {
        $dadosChamado = [

            'data_acao'             => isset($dados['data_acao']) ? $dados['data_acao'] : $dados['data_entrega'],
            'mensagem'              => isset($dados['mensagem']) ? $dados['mensagem'] : null,
            'status_chamado_id'     => isset($dados['status_chamado_id']) ? $dados['status_chamado_id'] : null,
            'usuario_id'            => isset($dados['usuario_id']) ? $dados['usuario_id'] : null,
            'contato_id'            => isset($dados['contato_id']) ? $dados['contato_id'] : null,
            'endereco_id'           => isset($dados['endereco_id']) ? $dados['endereco_id'] : null,
        ];

        $this->dados = $dadosChamado;
        return $this;
    }

    /**
     * Seta os patrimônios para adicionar no chamado.
     *
     * @param array $patrimonio_adicionar
     * @return AtualizarChamadoService
     */
    public function setPatrimoniosAdicionar(array $patrimonio_adicionar): AtualizarChamadoService
    {
        $this->patrimonio_adicionar = $patrimonio_adicionar;
        return $this;
    }

    /**
     * Seta os patrimônios para retirar no chamado.
     *
     * @param array $patrimonio_retirar
     * @return AtualizarChamadoService
     */
    public function setPatrimoniosRetirar(array $patrimonio_retirar): AtualizarChamadoService
    {
        $this->patrimonio_retirar = $patrimonio_retirar;
        return $this;
    }

    /**
     * Seta os dados para adicionar uma interação no chamado de suporte.
     *
     * @param array $dadosInteracoes
     * @return AtualizarChamadoService
     */
    public function setSuporteInteracoes(array $dadosInteracoes): AtualizarChamadoService
    {
        $dados = [
            'inicio'        => $dadosInteracoes['inicio'],
            'fim'           => $dadosInteracoes['fim'],
            'detalhes'      => $dadosInteracoes['detalhes'],
            'usuario_id'    => $dadosInteracoes['usuario_id']
        ];

        $this->dadosInteracoes = $dados;
        return $this;
    }

    /**
     * Seta o repositório de ChamadoRepository.
     *
     * @param ChamadoRepository $ChamadoRepository
     * @return AtualizarChamadoService
     */
    public function setChamadoRepository(ChamadoRepository $ChamadoRepository): AtualizarChamadoService
    {
        $this->ChamadoRepository = $ChamadoRepository;
        return $this;
    }
}
