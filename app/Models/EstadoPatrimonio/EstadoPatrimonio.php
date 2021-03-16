<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Models\EstadoPatrimonio;

use App\Models\Patrimonio\Patrimonio;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EstadoPatrimonio extends Model
{
    use HasFactory, SoftDeletes;

    protected $date = ['deleted_at'];

    protected $fillable = ['nome'];

    const DISPONIVEL = 1;

    const Alugado = 2;

    const VENDIDO = 3;

    const FURTADO = 4;

    const REPARO = 5;

    const PROTESTO = 6;

    const USO_INTERNO = 7;

    const DOADO = 8;

    const MARCADO_RETIRADA = 9;

    const MARCADO_ENTREGA = 10;

    public function patrimonios()
    {
        return $this->hasMany(Patrimonio::class, 'estado_patrimonio_id', 'id');
    }
}
