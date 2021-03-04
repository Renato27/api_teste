<?php

namespace App\Services\Chamado\GerarChamado\Base;

use App\Services\Chamado\GerarChamado\Contracts\GerarChamadoService;
use App\Models\Chamado\Chamado;
use App\Models\StatusChamado\StatusChamado;
use App\Repositories\Contracts\ChamadoRepository;

abstract class GerarChamadoServiceBase implements GerarChamadoService
{
    /**
     * Model de Chamado.
     *
     * @var Chamado|null
     */
    protected ?Chamado $Chamado;

    /**
     * Array de dados.
     *
     * @var array
     */
    protected array $dados;

    /**
     * Array de patrimônios.
     *
     * @var array|null
     */
    protected ?array $patrimonios;

    /**
     * Repositório de ChamadoRepository.
     *
     * @var Chamado
     */
    protected ChamadoRepository $ChamadoRepository;

   /**
     * Seta a model de Chamado.
     *
     * @param Chamado|null
     * @return GerarChamadoService
     */
    public function setChamado(?Chamado $Chamado): GerarChamadoService
    {
        $this->Chamado = $Chamado;
        return $this;
    }

     /**
     * Seta os patrimônios para gerar o chamado.
     *
     * @param array|null $patrimonios
     * @return GerarChamadoService
     */
    public function setPatrimonios(?array $patrimonios) : GerarChamadoService
    {
        $this->patrimonios = $patrimonios;
        return $this;
    }

    /**
     * Seta os dados para gerar o chamado.
     *
     * @param array $dados
     * @return GerarChamadoService
     */
    public function setDados(array $dados): GerarChamadoService
    {
        $dadosChamado = [

            'data_acao'             => isset($dados['data_acao']) ? $dados['data_acao'] : $dados['data_entrega'],
            'mensagem'              => isset($dados['mensagem']) ? $dados['mensagem'] : null,
            'status_chamado_id'     => StatusChamado::ABERTO,
            'tipo_chamado_id'       => $dados['tipo_chamado_id'],
            'usuario_id'            => isset($dados['usuario_id']) ? $dados['usuario_id'] : null,
            'pedido_id'             => isset($dados['pedido_id']) ? $dados['pedido_id'] : null,
            'contato_id'            => $dados['contato_id'],
            'endereco_id'           => $dados['endereco_id'],
            'login_team_viewer'     => $dados['login_team_viewer'],
            'senha_team_viewer'     => $dados['senha_team_viewer']
        ];

        $this->dados = $dadosChamado;
        return $this;
    }

    /**
     * Seta o repositório de ChamadoRepository.
     *
     * @param ChamadoRepository $ChamadoRepository
     * @return GerarChamadoService
     */
    public function setChamadoRepository(ChamadoRepository $ChamadoRepository): GerarChamadoService
    {
        $this->ChamadoRepository = $ChamadoRepository;
        return $this;
    }
}
