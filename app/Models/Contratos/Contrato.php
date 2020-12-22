<?php

namespace App\Models\Contratos;

use App\Models\ClienteContrato\ClienteContrato;
use App\Models\ContratoPedido\ContratoPedido;
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

    public function hasCliente()
    {
        return $this->hasOne(ClienteContrato::class, 'contrato_id', 'id');
    }

    public function hasPedidos()
    {
        return $this->hasMany(ContratoPedido::class, 'contrato_id', 'id');
    }

    public function contato()
    {
        return $this->morphMany(Contato::class, 'assinatura');
    }
}
