<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Services\Automatizacoes\Calculadora;

use Carbon\Carbon;

class Calculadora
{
    protected $preco;

    public function handle(Carbon $inicio, Carbon $fim, Carbon $periodoInicioPatrimonio, float $preco) : float
    {
        $this->preco = $preco;

        if ($periodoInicioPatrimonio->equalTo($inicio)) {
            $diferenca = $periodoInicioPatrimonio->diffInDays($fim) + 1;

            if ($diferenca < 28) {
                $diasCalculo = $this->getProRata($fim, $periodoInicioPatrimonio);

                return $this->getPeriodoCalculado($diasCalculo);
            }

            return $this->getPeriodoCheio($inicio, $fim);
        }

        $diasCalculo = $this->getProRata($fim, $periodoInicioPatrimonio);

        return $this->getPeriodoCalculado($diasCalculo);
    }

    /**
     * Retorna a quantidade de dias para calcular o pró-rata.
     *
     * @return int
     */
    protected function getProRata(Carbon $fim, Carbon $periodoInicioPatrimonio) : int
    {
        $quantidadeDias = 0;
        $fimMes = clone $fim;

        for ($i = $fim; $i->greaterThanOrEqualTo($periodoInicioPatrimonio); $i->subDay()) {
            $dia31 = clone $i;
            $dia29 = clone $i;
            $dia28 = clone $i;

            if ($dia31->format('d') == 1 && $dia31->subDay()->format('d') == 31) {
                $quantidadeDias -= 1;
            } elseif ($dia29->format('d') == 1 && $dia29->subDay()->format('d') == 29) {
                $quantidadeDias += 1;
            } elseif ($dia28->format('d') == 1 && $dia28->subDay()->format('d') == 28) {
                $quantidadeDias += 2;
            }

            $quantidadeDias++;
        }

        $diasAmaisPorMes = $this->getPeriodoFim28ou29ou31($fimMes, $periodoInicioPatrimonio);

        return $quantidadeDias + $diasAmaisPorMes;
    }

    /**
     * Retorna o período cheio de 30 dias calculados;.
     *
     * @param Carbon $inicio
     * @return float
     */
    protected function getPeriodoCheio(Carbon $inicio, Carbon $fim) : float
    {
        return $this->arrendondar30dias($inicio, $fim) * ($this->preco / 30);
    }

    /**
     * Retorna o período que passa por fevereiro e retorna o valor com 30 dias calculados.
     *
     * @param Carbon $mesInicio
     * @param Carbon $fim
     * @return float
     */
    protected function getPeriodoFim28ou29ou31(Carbon $fim, Carbon $inicio) : int
    {
        if ($fim->format('d') == 31 && $fim->endOfMonth()->format('d') == 31) {
            return -1;
        } elseif ($fim->format('d') == 29 && $fim->endOfMonth()->format('d') == 29) {
            return 1;
        } elseif ($fim->format('d') == 28 && $fim->endOfMonth()->format('d') == 28) {
            return 2;
        } elseif ($inicio->format('d') == 31) {
            return 1;
        }

        return 0;
    }

    /**
     * Retorna o período mais o calculo de pró-rata.
     *
     * @param Carbon $inicio
     * @return void
     */
    protected function getPeriodoMaisProRata(Carbon $inicio, int $quantidadeDias) : float
    {
        return ($this->arrendondar30dias($inicio) + $quantidadeDias) * ($this->preco / 30);
    }

    /**
     * Retorna o calculo de dias quando for menor que um período.
     *
     * @param Carbon $inicio
     * @param Carbon $fim
     * @return void
     */
    protected function getPeriodoCalculado(int $quantidadeDias) : float
    {
        return $quantidadeDias * ($this->preco / 30);
    }

    /**
     * Retorna um período de 30 dias independente do mês.
     *
     * @param Carbon $inicio
     * @param Carbon|null $fim
     * @return int|null
     */
    protected function arrendondar30dias(Carbon $inicio, ?Carbon $fim = null) : ?int
    {
        $inicioMes = clone $inicio;

        $proximoMes = clone $inicio;

        $proximoMes->settings([
            'monthOverflow' => false,
        ]);

        //Resultado da quantidade de dias para finalizar o mês
        $dias = $inicioMes->daysInMonth - $inicio->format('d'); // Quantidade de dias do mês da data início - menos os dias da data início. Resultando na quantidade de dias para finalizar o mês.

        //Quantidade de dias para o próximo mês chegar a 30
        $diasRestantes = 30 - $dias; //Subtrai 30 do Resultando da quantidade de dias para finalizar o mês

        //Quantidade de dias corridos para o próximo mês.
        $diasTotal = $proximoMes->addMonth()->startOfMonth()->format('d') + $diasRestantes - 1; //Pega o primeiro dia do próximo mês e adciona a quantidade de dias para o próximo mês chegar a 30 - 1

        return $diasTotal + $dias; //Quantidade de dias corridos para o próximo mês + Resultado da quantidade de dias para finalizar o mês.
    }
}
