<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Models\EspelhoRecorrente;

use App\Models\Nota\Nota;
use App\Models\Contratos\Contrato;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\EspelhoRecorrentePatrimonio\EspelhoRecorrentePatrimonio;

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
