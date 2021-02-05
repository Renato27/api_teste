<?php

namespace App\Models\NotaEspelho;

use App\Models\Clientes\Cliente;
use App\Models\Contratos\Contrato;
use App\Models\EspelhoRecorrente\EspelhoRecorrente;
use App\Models\NotaEspelhoEstado\NotaEspelhoEstado;
use App\Models\NotaEspelhoPatrimonio\NotaEspelhoPatrimonio;
use App\Models\Pedido\Pedido;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NotaEspelho extends Model
{
    use HasFactory, SoftDeletes;

    protected $date = ['deleted_at'];
    protected $fillable = ['data_emissao', 'data_vencimento', 'periodo_inicio', 'periodo_fim', 'valor',
    'nota_espelho_estado_id', 'cliente_id', 'contrato_id', 'pedido_id', 'espelho_recorrente_id'];

    public function nota_espelho_estado()
    {
        return $this->belongsTo(NotaEspelhoEstado::class, 'nota_espelho_estado_id');
    }

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'cliente_id');
    }

    public function contrato()
    {
        return $this->belongsTo(Contrato::class, 'contrato_id');
    }

    public function pedido()
    {
        return $this->belongsTo(Pedido::class, 'pedido_id');
    }

    public function espelho_recorrente()
    {
        return $this->belongsTo(EspelhoRecorrente::class, 'espelho_recorrente_id');
    }

    public function patrimonios()
    {
        return $this->hasMany(NotaEspelhoPatrimonio::class, 'nota_espelho_id', 'id');
    }
}
