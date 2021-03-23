<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Models\Cobranca;

use App\Models\Nota\Nota;
use App\Models\Usuario\Usuario;
use App\Models\Clientes\cliente;
use Illuminate\Database\Eloquent\Model;
use App\Models\CobrancaNota\CobrancaNota;
use App\Models\CobrancaEstado\CobrancaEstado;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\CobrancaAtividade\CobrancaAtividade;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cobranca extends Model
{
    use HasFactory, SoftDeletes;

    protected $date = ['deleted_at'];
    protected $fillable = ['descricao', 'usuario_id', 'cliente_id', 'cobranca_estado_id'];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'usuario_id');
    }

    public function cliente()
    {
        return $this->belongsTo(cliente::class, 'cliente_id');
    }

    public function cobranca_estado()
    {
        return $this->belongsTo(CobrancaEstado::class, 'cobranca_estado_id');
    }

    public function atividades()
    {
        return $this->hasMany(CobrancaAtividade::class, 'cobranca_id', 'id');
    }

    public function notas()
    {
        return $this->hasManyThrough(Nota::class, CobrancaNota::class, 'cobranca_id', 'id', 'id', 'nota_id');
    }
}
