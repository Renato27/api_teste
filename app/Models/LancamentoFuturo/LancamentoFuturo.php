<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Models\LancamentoFuturo;

use App\Models\Nota\Nota;
use App\Models\Contratos\Contrato;
use App\Models\NotaEspelho\NotaEspelho;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LancamentoFuturo extends Model
{
    use HasFactory, SoftDeletes;

    protected $date = ['deleted_at'];
    protected $fillable = ['mes_cobranca', 'descricao', 'quantidade', 'valor_unitario', 'nota_espelho_id', 'contrato_id', 'nota_id'];

    public function nota_espelho()
    {
        return $this->belongsTo(NotaEspelho::class, 'nota_espelho_id');
    }

    public function contrato()
    {
        return $this->belongsTo(Contrato::class, 'contrato_id');
    }

    public function nota()
    {
        return $this->belongsTo(Nota::class, 'nota_id');
    }
}
