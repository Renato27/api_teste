<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Services\PatrimonioAlugado\GerarPatrimonioAlugado\Base;

use App\Models\Chamado\Chamado;
use Illuminate\Database\Eloquent\Model;
use App\Models\EntregaPatrimonio\EntregaPatrimonio;
use App\Models\PatrimonioAlugado\PatrimonioAlugado;
use App\Repositories\Contracts\PatrimonioAlugadoRepository;
use App\Models\TrocaPatrimonioRetirada\TrocaPatrimonioRetirada;
use App\Services\PatrimonioAlugado\GerarPatrimonioAlugado\Contracts\GerarPatrimonioAlugadoService;

abstract class GerarPatrimonioAlugadoServiceBase implements GerarPatrimonioAlugadoService
{
    /**
     * Model de EntregaPatrimonio.
     *
     * @var Model|null
     */
    protected ?Model $model;

    /**
     * Model de EntregaPatrimonio.
     *
     * @var TrocaPatrimonioRetirada|null
     */
    protected ?TrocaPatrimonioRetirada $trocaPatrimonioRetirada;

    /**
     * Array de dados.
     *
     * @var array|null
     */
    protected ?array $dados;

    /**
     * Chamado.
     *
     * @var Chamado|null
     */
    protected ?Chamado $chamado;

    /**
     * Repositório de PatrimonioAlugadoRepository.
     *
     * @var PatrimonioAlugado
     */
    protected PatrimonioAlugadoRepository $PatrimonioAlugadoRepository;

    /**
     * Seta a model de PatrimonioAlugado.
     *
     * @param Model|null
     * @return GerarPatrimonioAlugadoService
     */
    public function setEntregaPatrimonio(?Model $model = null): GerarPatrimonioAlugadoService
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Seta uma model.
     *
     * @param TrocaPatrimonioRetirada|null $model
     * @return GerarPatrimonioAlugadoService
     */
    public function setPatrimonioRetirada(?TrocaPatrimonioRetirada $trocaPatrimonioRetirada = null): GerarPatrimonioAlugadoService
    {
        $this->trocaPatrimonioRetirada = $trocaPatrimonioRetirada;

        return $this;
    }

    /**
     * Seta os dados para PatrimonioAlugado.
     *
     * @param array|null $dados
     * @return GerarPatrimonioAlugadoService;
     */
    public function setDados(?array $dados = null): GerarPatrimonioAlugadoService
    {
        $this->dados = $dados;

        return $this;
    }

    /**
     * Seta a model de chamado.
     *
     * @param Chamado|null $chamado
     * @return GerarPatrimonioAlugadoService
     */
    public function setChamado(?Chamado $chamado = null): GerarPatrimonioAlugadoService
    {
        $this->chamado = $chamado;

        return $this;
    }

    /**
     * Seta o repositório de PatrimonioAlugadoRepository.
     *
     * @param PatrimonioAlugadoRepository $PatrimonioAlugadoRepository
     * @return GerarPatrimonioAlugadoService
     */
    public function setPatrimonioAlugadoRepository(PatrimonioAlugadoRepository $PatrimonioAlugadoRepository): GerarPatrimonioAlugadoService
    {
        $this->PatrimonioAlugadoRepository = $PatrimonioAlugadoRepository;

        return $this;
    }
}
