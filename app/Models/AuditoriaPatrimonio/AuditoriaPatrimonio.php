<?php

namespace App\Models\AuditoriaPatrimonio;

use App\Models\Auditoria\Auditoria;
use App\Models\Chamado\Chamado;
use App\Models\Patrimonio\Patrimonio;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AuditoriaPatrimonio extends Model
{
    use HasFactory, SoftDeletes;

    protected $date = ['deleted_at'];
    protected $fillable = ['auditoria_id', 'patrimonio_id'];

    public function auditoria()
    {
        return $this->belongsTo(Auditoria::class, 'auditoria_id');
    }

    public function patrimonio()
    {
        return $this->belongsTo(Patrimonio::class, 'patrimonio_id');
    }

}
