<?php

namespace App\Models\Expedicao;

use App\Models\Chamado\Chamado;
use App\Models\ExpedicaoEstado\ExpedicaoEstado;
use App\Models\ExpedicaoTipo\ExpedicaoTipo;
use App\Models\Pedido\Pedido;
use App\Models\Usuario\Usuario;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Expedicao extends Model
{
    use HasFactory, SoftDeletes;

    protected $date = ['deleted_at'];
    protected $fillable = ['pedido_id', 'expedicao_estado_id', 'expedicao_tipo_id', 'usuario_id', 'chamado_id'];

    public function pedido()
    {
        return $this->belongsTo(Pedido::class, 'pedido_id');
    }

    public function expedicao_estado()
    {
        return $this->belongsTo(ExpedicaoEstado::class, 'expedicao_estado_id');
    }

    public function expedicao_tipo()
    {
        return $this->belongsTo(ExpedicaoTipo::class, 'expedicao_tipo_id');
    }

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'usuario_id');
    }

    public function chamado()
    {
        return $this->belongsTo(Chamado::class, 'chamado_id');
    }
}
