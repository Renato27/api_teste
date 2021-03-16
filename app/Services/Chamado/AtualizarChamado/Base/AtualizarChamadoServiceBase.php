<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Services\Chamado\AtualizarChamado\Base;

use App\Models\Chamado\Chamado;
use App\Repositories\Contracts\ChamadoRepository;
use App\Services\Chamado\AtualizarChamado\Contracts\AtualizarChamadoService;

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
     * Array de patrimônios.
     *
     * @var int
     */
    protected int $patrimonio_adicionar;

    /**
     * Array de patrimônios.
     *
     * @var int
     */
    protected int $patrimonio_retirar;

    /**
     * dados para gerar uma interação.
     *
     * @var array
     */
    protected array $dadosInteracoes;

    /**
     * dados do contador.
     *
     * @var array
     */
    protected array $dadosContador;

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
            'data_acao' => $dados['data_acao'] ?? $dados['data_entrega'],
            'mensagem' => $dados['mensagem'] ?? null,
            'status_chamado_id' => $dados['status_chamado_id'] ?? null,
            'usuario_id' => $dados['usuario_id'] ?? null,
            'contato_id' => $dados['contato_id'] ?? null,
            'endereco_id' => $dados['endereco_id'] ?? null,
        ];

        $this->dados = $dadosChamado;

        return $this;
    }

    /**
     * Seta os patrimônios para adicionar no chamado.
     *
     * @param int $patrimonio_adicionar
     * @return AtualizarChamadoService
     */
    public function setPatrimoniosAdicionar(int $patrimonio_adicionar): AtualizarChamadoService
    {
        $this->patrimonio_adicionar = $patrimonio_adicionar;

        return $this;
    }

    /**
     * Seta os patrimônios para retirar no chamado.
     *
     * @param int $patrimonio_retirar
     * @return AtualizarChamadoService
     */
    public function setPatrimoniosRetirar(int $patrimonio_retirar): AtualizarChamadoService
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
            'inicio' => $dadosInteracoes['inicio'],
            'fim' => $dadosInteracoes['fim'],
            'detalhes' => $dadosInteracoes['detalhes'],
            'usuario_id' => $dadosInteracoes['usuario_id'],
        ];

        $this->dadosInteracoes = $dados;

        return $this;
    }

    /**
     * Seta o valor para atualizar o contador.
     *
     * @param array $dadosContador
     * @return AtualizarChamadoService
     */
    public function setContadorDados(array $dadosContador): AtualizarChamadoService
    {
        $dadosCo = [
            'patrimonio_id' => $dadosContador['patrimonio_id'],
            'novo_contador' => $dadosContador['novo_contador'],
        ];

        $this->dadosContador = $dadosCo;

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
