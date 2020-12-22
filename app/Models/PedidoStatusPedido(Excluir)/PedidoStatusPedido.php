<?php

namespace App\Models\PedidoStatusPedido;

use App\Models\Pedido\Pedido;
use App\Models\StatusPedido\StatusPedido;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PedidoStatusPedido extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $date = ['deleted_at'];

    protected $fillable = ['pedido_id', 'status_pedido_id'];

    public function pedido()
    {
        return $this->belongsTo(Pedido::class, 'pedido_id');
    }

    public function status_pedido()
    {
        return $this->belongsTo(StatusPedido::class, 'status_pedido_id');
    }
}
