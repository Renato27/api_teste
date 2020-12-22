<?php

namespace App\Models\TipoLicenca;

use App\Models\Licenca\Licenca;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TipoLicenca extends Model
{
    use HasFactory, SoftDeletes;

    protected $date = ['deleted_at'];
    protected $fillable = ['nome'];

    public function licencas()
    {
        return $this->hasMany(Licenca::class, 'tipo_licenca_id', 'id');
    }
}
