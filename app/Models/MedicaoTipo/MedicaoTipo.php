<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Models\MedicaoTipo;

use App\Models\Contratos\Contrato;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MedicaoTipo extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $date = ['deleted_at'];

    protected $fillable = ['nome'];

    const SEM_MEDICAO = 1;

    const VENCIDA = 2;

    const A_VENCER = 3;

    public function contratos()
    {
        return $this->hasMany(Contrato::class, 'medicao_tipo_id', 'id');
    }
}
