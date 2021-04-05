<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Models\Licenca;

use App\Models\Patrimonio\Patrimonio;
use App\Models\TipoLicenca\TipoLicenca;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\LicencaPatrimonio\LicencaPatrimonio;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Licenca extends Model
{
    use HasFactory, SoftDeletes;

    protected $date = ['deleted_at'];

    protected $fillable = ['email', 'quantidade', 'tipo_licenca_id'];

    public function tipo_licenca()
    {
        return $this->belongsTo(TipoLicenca::class, 'tipo_licenca_id');
    }

    public function patrimonios()
    {
        return $this->hasManyThrough(Patrimonio::class, LicencaPatrimonio::class, 'licenca_id', 'id', 'id', 'patrimonio_id');
    }

    public function licenca_patrimonios()
    {
        return $this->hasMany(LicencaPatrimonio::class, 'licenca_id', 'id');
    }
}
