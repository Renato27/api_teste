<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Models\ExpedicaoTipo;

use App\Models\Expedicao\Expedicao;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ExpedicaoTipo extends Model
{
    use HasFactory, SoftDeletes;

    protected $date = ['deleted_at'];

    protected $fillable = ['nome'];

    const ENTREGA = 1;

    const RETIRADA = 2;

    public function expedicoes()
    {
        return $this->hasMany(Expedicao::class, 'expedicao_tipo_id');
    }
}
