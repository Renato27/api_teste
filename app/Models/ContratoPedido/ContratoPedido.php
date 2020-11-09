<?php

namespace App\Models\ContratoPedido;

use App\Models\Contratos\Contratos;
use App\Models\Pedido\Pedido;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContratoPedido extends Model
{
    use HasFactory;

    protected $fillable = ['pedido_id', 'contrato_id'];

    public function pedido()
    {
        return $this->belongsTo(Pedido::class, 'pedido_id');
    }

    public function contrato()
    {
        return $this->belongsTo(Contratos::class, 'contrato_id');
    }
}
