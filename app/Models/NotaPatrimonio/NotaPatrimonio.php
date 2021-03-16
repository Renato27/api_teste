<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Models\NotaPatrimonio;

use App\Models\Nota\Nota;
use App\Models\Chamado\Chamado;
use App\Models\Contratos\Contrato;
use App\Models\Patrimonio\Patrimonio;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class NotaPatrimonio extends Model
{
    use HasFactory, SoftDeletes;

    protected $date = ['deleted_at'];

    protected $fillable = ['periodo_inicio', 'periodo_fim', 'valor',
        'patrimonio_id', 'nota_id', 'contrato_id', 'chamado_id', ];

    public function patrimonio()
    {
        return $this->belongsTo(Patrimonio::class, 'patrimonio_id');
    }

    public function nota()
    {
        return $this->belongsTo(Nota::class, 'nota_id');
    }

    public function contrato()
    {
        return $this->belongsTo(Contrato::class, 'contrato_id');
    }

    public function chamado()
    {
        return $this->belongsTo(Chamado::class, 'chamado_id');
    }
}
