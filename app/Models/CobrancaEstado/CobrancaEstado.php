<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Models\CobrancaEstado;

use App\Models\Cobranca\Cobranca;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CobrancaEstado extends Model
{
    use HasFactory, SoftDeletes;

    protected $date = ['deleted_at'];
    protected $fillable = ['nome'];

    public function cobrancas()
    {
        return $this->hasMany(Cobranca::class, 'cobranca_estado_id', 'id');
    }
}
