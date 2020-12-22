<?php

namespace App\Models\Pedido;

use App\Models\ContratoPedido\ContratoPedido;
use App\Models\Contratos\Contrato;
use App\Models\ItemPedido\ItemPedido;
use App\Models\PedidoItem\PedidoItem;
use App\Models\PedidoStatusPedido\PedidoStatusPedido;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pedido extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $date = ['deleted_at'];

    protected $fillable = ['data_entrega', 'data_retirada'];

    public function itens()
    {
        return $this->hasManyThrough(ItemPedido::class, PedidoItem::class, 'pedido_id', 'id');
    }

    public function contrato()
    {
        return $this->hasOneThrough(Contrato::class, ContratoPedido::class, 'pedido_id', 'id');
    }

}
