<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Services\PatrimonioAlugado\GerarPatrimonioAlugado\Contracts;

use App\Models\Chamado\Chamado;
use Illuminate\Database\Eloquent\Model;
use App\Models\PatrimonioAlugado\PatrimonioAlugado;
use App\Repositories\Contracts\PatrimonioAlugadoRepository;
use App\Models\TrocaPatrimonioRetirada\TrocaPatrimonioRetirada;

interface GerarPatrimonioAlugadoService
{
    /**
     * Seta uma model.
     *
     * @param Model|null
     * @return GerarPatrimonioAlugadoService
     */
    public function setEntregaPatrimonio(?Model $model = null): self;

    /**
     * Seta os dados para PatrimonioAlugado.
     *
     * @param array|null $dados
     * @return GerarPatrimonioAlugadoService;
     */
    public function setDados(?array $dados = null): self;

    /**
     * Seta uma model.
     *
     * @param TrocaPatrimonioRetirada|null $model
     * @return GerarPatrimonioAlugadoService
     */
    public function setPatrimonioRetirada(?TrocaPatrimonioRetirada $trocaPatrimonioRetirada = null): self;

    /**
     * Seta a model de chamado.
     *
     * @param Chamado|null $chamado
     * @return GerarPatrimonioAlugadoService
     */
    public function setChamado(?Chamado $chamado = null): self;

    /**
     * Seta o repositório de PatrimonioAlugadoRepository.
     *
     * @param PatrimonioAlugadoRepository $PatrimonioAlugadoRepository
     * @return GerarPatrimonioAlugadoService
     */
    public function setPatrimonioAlugadoRepository(PatrimonioAlugadoRepository $PatrimonioAlugadoRepository): self;

    /**
     * Processa os dados.
     *
     * @return bool
     */
    public function handle(): bool;
}
