<?php

namespace App\Models\CorretivaPatrimonio;

use App\Models\Corretiva\Corretiva;
use App\Models\Patrimonio\Patrimonio;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CorretivaPatrimonio extends Model
{
    use HasFactory, SoftDeletes;

    protected $date = ['deleted_at'];
    protected $fillable = ['corretiva_id', 'patrimonio_id'];

    public function corretiva()
    {
        return $this->belongsTo(Corretiva::class, 'corretiva_id');
    }

    public function patrimonio()
    {
        return $this->belongsTo(Patrimonio::class, 'patrimonio_id');
    }
}
