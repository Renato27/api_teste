<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Models\Pedido;

use App\Models\Contato\Contato;
use App\Models\Endereco\Endereco;
use App\Models\Contratos\Contrato;
use App\Models\ItemPedido\ItemPedido;
use App\Models\PedidoItem\PedidoItem;
use App\Models\NotaEspelho\NotaEspelho;
use Illuminate\Database\Eloquent\Model;
use App\Models\StatusPedido\StatusPedido;
use App\Models\ContratoPedido\ContratoPedido;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pedido extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $date = ['deleted_at'];

    protected $fillable = ['data_entrega', 'data_retirada', 'status_pedido_id', 'contato_id', 'endereco_id'];

    public function itens()
    {
        return $this->hasManyThrough(ItemPedido::class, PedidoItem::class, 'pedido_id', 'id', 'id', 'item_pedido_id');
    }

    public function contrato()
    {
        return $this->hasOneThrough(Contrato::class, ContratoPedido::class, 'pedido_id', 'id', 'id', 'contrato_id');
    }

    public function status()
    {
        return $this->belongsTo(StatusPedido::class, 'status_pedido_id');
    }

    public function contato()
    {
        return $this->belongsTo(Contato::class, 'contato_id');
    }

    public function endereco()
    {
        return $this->belongsTo(Endereco::class, 'endereco_id');
    }

    public function nota_espelho()
    {
        return $this->hasOne(NotaEspelho::class, 'pedido_id', 'id');
    }
}
