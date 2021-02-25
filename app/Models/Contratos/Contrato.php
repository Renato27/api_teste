<?php

namespace App\Models\Contratos;

use App\Models\ClienteContrato\ClienteContrato;
use App\Models\Clientes\Cliente;
use App\Models\Contato\Contato;
use App\Models\ContatoContrato\ContatoContrato;
use App\Models\ContratoItemDefinido\ContratoItemDefinido;
use App\Models\ContratoPedido\ContratoPedido;
use App\Models\ItemDefinido\ItemDefinido;
use App\Models\Nota\Nota;
use App\Models\Pedido\Pedido;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contrato extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $date = ['deleted_at'];

    protected $fillable = ['nome', 'inicio', 'fim', 'medicao_tipo_id', 'pagamento_metodo_id', 'contrato_tipo_id', 'detalhes', 'detalhes_nota', 'dia_emissao_nota',
    'dia_vencimento_nota', 'dia_periodo_inicio_nota', 'dia_periodo_fim_nota', 'responsavel'];

    public function cliente()
    {
        return $this->hasOneThrough(Cliente::class, ClienteContrato::class, 'contrato_id', 'id', 'id', 'cliente_id');
    }

    public function contatos()
    {
        return $this->hasManyThrough(Contato::class, ContatoContrato::class, 'contrato_id', 'id', 'id', 'contato_id');
    }

    public function pedidos()
    {
        return $this->hasManyThrough(Pedido::class, ContratoPedido::class, 'contrato_id', 'id');
    }

    public function itens()
    {
        return $this->hasManyThrough(ItemDefinido::class, ContratoItemDefinido::class, 'contrato_id', 'id', 'id', 'item_definido_id');
    }

    public function notas()
    {
        return $this->hasMany(Nota::class, 'contrato_id', 'id');
    }
}
