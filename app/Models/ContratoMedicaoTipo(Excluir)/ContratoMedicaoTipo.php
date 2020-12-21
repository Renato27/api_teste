<?php

namespace App\Models\ContratoMedicaoTipo;

use App\Models\Contratos\Contratos;
use App\Models\MedicaoTipo\MedicaoTipo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ContratoMedicaoTipo extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $date = ['deleted_at'];

    protected $fillable = ['contrato_id', 'medicao_tipo_id'];

    public function contrato()
    {
        return $this->belongsTo(Contratos::class, 'contrato_id');
    }

    public function medicao_tipo()
    {
        return $this->belongsTo(MedicaoTipo::class, 'medicao_tipo_id');
    }
}
