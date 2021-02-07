<?php

namespace App\Models\Chamado;

use App\Models\Contato\Contato;
use App\Models\Endereco\Endereco;
use App\Models\Entrega\Entrega;
use App\Models\Pedido\Pedido;
use App\Models\Retirada\Retirada;
use App\Models\StatusChamado\StatusChamado;
use App\Models\TipoChamado\TipoChamado;
use App\Models\Usuario\Usuario;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Chamado extends Model
{
    use HasFactory, SoftDeletes;

    protected $date = ['deleted_at'];
    protected $fillable = ['data_acao', 'mensagem', 'status_chamado_id', 'tipo_chamado_id', 'usuario_id',
    'pedido_id', 'contato_id', 'endereco_id'];

    public function status_chamado()
    {
        return $this->belongsTo(StatusChamado::class, 'status_chamado_id');
    }

    public function tipo_chamado()
    {
        return $this->belongsTo(TipoChamado::class, 'tipo_chamado_id');
    }

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'usuario_id');
    }

    public function pedido()
    {
        return $this->belongsTo(Pedido::class, 'pedido_id');
    }

    public function contato()
    {
        return $this->belongsTo(Contato::class, 'contato_id');
    }

    public function endereco()
    {
        return $this->belongsTo(Endereco::class, 'endereco_id');
    }

    public function entrega()
    {
        return $this->hasOne(Entrega::class, 'chamado_id', 'id');
    }

    public function retirada()
    {
        return $this->hasOne(Retirada::class, 'chamado_id', 'id');
    }
}
