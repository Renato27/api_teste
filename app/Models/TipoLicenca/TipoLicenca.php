<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Models\TipoLicenca;

use App\Models\Licenca\Licenca;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TipoLicenca extends Model
{
    use HasFactory, SoftDeletes;

    protected $date = ['deleted_at'];

    protected $fillable = ['nome'];

    const LOGICA = 1;

    const CLIENTE = 2;

    public function licencas()
    {
        return $this->hasMany(Licenca::class, 'tipo_licenca_id', 'id');
    }
}
