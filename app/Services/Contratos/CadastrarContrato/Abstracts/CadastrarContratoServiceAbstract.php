<?php

namespace App\Services\Contratos\CadastrarContrato\Abstracts;

use App\Models\Contratos\Contrato;
use App\Repositories\Contracts\ContratosRepository;
use App\Services\Contratos\CadastrarContrato\Contracts\CadastrarContratoService;
use Exception;
use Symfony\Component\HttpKernel\Exception\HttpException;

abstract class CadastrarContratoServiceAbstract implements CadastrarContratoService
{

    /**
     * Dados a serem cadastrados;
     *
     * @var array
     */
    protected array $dados;

    /**
     * Repositório de contrato.
     *
     * @var ContratoRepository
     */
    protected ContratosRepository $contratoRepository;

    /**
     * Seta os dados para cadastrar um contrato.
     *
     * @param array $dados
     * @return CadastrarContratoService
     */
    public function setDados(array $dados) : CadastrarContratoService
    {
        $dadosContrato = [
            'nome'      => $dados['nome'],
            'inicio'     => $dados['inicio'],
            'fim'  => $dados['fim'],
            'medicao_tipo_id'   => $dados['medicao_tipo_id'],
            'pagamento_metodo_id' => $dados['pagamento_metodo_id'],
            'contrato_tipo_id'   => $dados['contrato_tipo_id'],
            'detalhes'   => $dados['detalhes'],
            'detalhes_nota'   => $dados['detalhes_nota'],
            'dia_emissao_nota'   => $dados['dia_emissao_nota'],
            'dia_vencimento_nota'   => $dados['dia_vencimento_nota'],
            'dia_periodo_inicio_nota'   => $dados['dia_periodo_inicio_nota'],
            'dia_periodo_fim_nota'   => $dados['dia_periodo_fim_nota'],
            'responsavel'   => $dados['responsavel']
        ];

        $this->dados = $dadosContrato;

        return $this;
    }

    /**
     * Seta o repositório de contrato.
     *
     * @param ContratoRepository $contratoRepository
     * @return CadastrarContratoService
     */
    public function setContratoRepository(ContratosRepository $contratoRepository) : CadastrarContratoService
    {
        $this->contratoRepository = $contratoRepository;

        return $this;
    }

    /**
     * Processa os dados e cadastra o contrato.
     *
     * @return Contrato
     */
    protected function cadastrarContrato() : Contrato
    {
        $contratoCadastrado = $this->contratoRepository->createContrato($this->dados);

        if(!isset($contratoCadastrado->id))
            throw new HttpException("Não foi possível cadastrar o contrato. Verifique os dados e tente novamente.");

        return $contratoCadastrado;
    }
}
