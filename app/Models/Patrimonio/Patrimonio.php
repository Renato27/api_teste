<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Models\Patrimonio;

use App\Models\Ficha\Ficha;
use App\Models\Compra\Compra;
use App\Models\Modelo\Modelo;
use App\Models\Fabricante\Fabricante;
use App\Models\Fornecedor\Fornecedor;
use Illuminate\Database\Eloquent\Model;
use App\Models\TipoPatrimonio\TipoPatrimonio;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\EstadoPatrimonio\EstadoPatrimonio;
use App\Models\PatrimonioAlugado\PatrimonioAlugado;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Patrimonio extends Model
{
    use HasFactory, SoftDeletes;

    protected $date = ['deleted_at'];

    protected $fillable = ['numero_patrimonio', 'numero_serie', 'modelo_id', 'tipo_patrimonio_id',
        'compra_id', 'fabricante_id', 'fornecedor_id', 'estado_patrimonio_id', ];

    public function modelo()
    {
        return $this->belongsTo(Modelo::class, 'modelo_id');
    }

    public function tipo_patrimonio()
    {
        return $this->belongsTo(TipoPatrimonio::class, 'tipo_patrimonio_id');
    }

    public function compra()
    {
        return $this->belongsTo(Compra::class, 'compra_id');
    }

    public function fabricante()
    {
        return $this->belongsTo(Fabricante::class, 'fabricante_id');
    }

    public function fornecedor()
    {
        return $this->belongsTo(Fornecedor::class, 'fornecedor_id');
    }

    public function estado_patrimonio()
    {
        return $this->belongsTo(EstadoPatrimonio::class, 'estado_patrimonio_id');
    }

    public function aluguel()
    {
        return $this->hasOne(PatrimonioAlugado::class, 'patrimonio_id', 'id');
    }

    public function fichas()
    {
        return $this->hasMany(Ficha::class, 'patrimonio_id', 'id');
    }
}
