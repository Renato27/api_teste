<?php

namespace App\Models\EspelhoRecorrente;

use App\Models\Contratos\Contrato;
use App\Models\EspelhoRecorrentePatrimonio\EspelhoRecorrentePatrimonio;
use App\Models\Nota\Nota;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EspelhoRecorrente extends Model
{
    use HasFactory, SoftDeletes;

    protected $date = ['deleted_at'];
    protected $fillable = ['dia_emissao', 'dia_vencimento', 'contrato_id', 'nota_id', 'anterior_nota_id'];

    public function contrato()
    {
        return $this->belongsTo(Contrato::class, 'contrato_id');
    }

    public function nota()
    {
        return $this->belongsTo(Nota::class, 'nota_id');
    }

    public function nota_anterior()
    {
        return $this->belongsTo(Nota::class, 'anterior_nota_id');
    }

    public function patrimonios()
    {
        return $this->hasMany(EspelhoRecorrentePatrimonio::class, 'espelho_recorrente_id', 'id');
    }
}
