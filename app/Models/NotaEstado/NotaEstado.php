<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Models\NotaEstado;

use App\Models\Nota\Nota;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class NotaEstado extends Model
{
    use HasFactory, SoftDeletes;

    protected $date = ['deleted_at'];

    protected $fillable = ['nome'];

    const A_VENCER  = 1;
    const VENCIDA   = 2;
    const PAGA      = 3;

    public function notas()
    {
        return $this->hasMany(Nota::class, 'nota_estado_id', 'id');
    }
}
