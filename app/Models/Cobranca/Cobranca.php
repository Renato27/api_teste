<?php

namespace App\Models\Cobranca;

use App\Models\Clientes\cliente;
use App\Models\CobrancaAtividade\CobrancaAtividade;
use App\Models\CobrancaEstado\CobrancaEstado;
use App\Models\CobrancaNota\CobrancaNota;
use App\Models\Nota\Nota;
use App\Models\Usuario\Usuario;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

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
        return $this->hasMany(CobrancaAtividade::class, 'cliente_cobranca_id', 'id');
    }

    public function notas()
    {
        return $this->hasManyThrough(Nota::class, CobrancaNota::class, 'cobranca_id', 'id', 'id', 'nota_id');
    }
}
