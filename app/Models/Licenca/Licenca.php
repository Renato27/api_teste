<?php

namespace App\Models\Licenca;

use App\Models\LicencaPatrimonio\LicencaPatrimonio;
use App\Models\Patrimonio\Patrimonio;
use App\Models\TipoLicenca\TipoLicenca;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

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
        return $this->hasManyThrough(Patrimonio::class, LicencaPatrimonio::class, 'licenca_id', 'id');
    }
}
