<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Models\NotaEspelhoPatrimonio;

use App\Models\Chamado\Chamado;
use App\Models\Contratos\Contrato;
use App\Models\Patrimonio\Patrimonio;
use App\Models\NotaEspelho\NotaEspelho;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class NotaEspelhoPatrimonio extends Model
{
    use HasFactory, SoftDeletes;

    protected $date = ['deleted_at'];

    protected $fillable = ['periodo_inicio', 'periodo_fim', 'valor', 'patrimonio_id',
        'nota_espelho_id', 'contrato_id', 'chamado_id', ];

    public function patrimonio()
    {
        return $this->belongsTo(Patrimonio::class, 'patrimonio_id');
    }

    public function nota_espelho()
    {
        return $this->belongsTo(NotaEspelho::class, 'nota_espelho_id');
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
