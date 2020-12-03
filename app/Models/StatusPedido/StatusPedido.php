<?php

namespace App\Models\StatusPedido;

use App\Models\PedidoStatusPedido\PedidoStatusPedido;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StatusPedido extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $date = ['deleted_at'];

    protected $fillable = ['nome'];

    public function hasPedidos()
    {
        return $this->hasMany(PedidoStatusPedido::class, 'status_pedido_id', 'id');
    }
}
