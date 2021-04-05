<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Models\ContratoTipo;

use App\Models\Contratos\Contrato;
use Illuminate\Database\Eloquent\Model;
use App\Models\TipoContrato\TipoContrato;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ContratoTipo extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $date = ['deleted_at'];

    protected $fillable = ['nome'];

    const LOCACAO = 1;

    const SUPORTE = 2;

    const VALOR_FIXO = 3;

    public function contratos()
    {
        return $this->hasManyThrough(Contrato::class, TipoContrato::class, 'contrato_tipo_id', 'id');
    }
}
