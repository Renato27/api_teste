<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Models\ExpedicaoEstado;

use App\Models\Expedicao\Expedicao;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ExpedicaoEstado extends Model
{
    use HasFactory, SoftDeletes;

    protected $date = ['deleted_at'];

    protected $fillable = ['nome'];

    const AGUARDANDO_SELECAO = 1;

    const AGUARDANDO_SEPARACAO = 2;

    const AGUARDANDO_PREPARACAO = 3;

    const LIBERADO = 4;

    const AGUARDANDO_REVERSA = 5;

    const REVERSA_CONCLUIDA = 6;

    const CANCELADA = 7;

    public function expedicoes()
    {
        return $this->hasMany(Expedicao::class, 'expedicao_estado_id');
    }
}
