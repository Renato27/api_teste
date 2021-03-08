<?php

namespace App\Models\LicencaPatrimonio;

use App\Models\Licenca\Licenca;
use App\Models\Patrimonio\Patrimonio;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LicencaPatrimonio extends Model
{
    use HasFactory, SoftDeletes;

    protected $date = ['deleted_at'];
    protected $fillable = ['host_name', 'licenca_id', 'patrimonio_id', 'retirar_licenca'];

    public function licenca()
    {
        return $this->belongsTo(Licenca::class, 'licenca_id');
    }

    public function patrimonio()
    {
        return $this->belongsTo(Patrimonio::class, 'patrimonio_id');
    }
}
