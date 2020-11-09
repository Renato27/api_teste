<?php

namespace App\Models\ContratoPagamentoMetodo;

use App\Models\Contratos\Contratos;
use App\Models\PagamentoMetodo\PagamentoMetodo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContratoPagamentoMetodo extends Model
{
    use HasFactory;

    protected $fillable = ['contrato_id', 'pagamento_metodo_id'];

    public function contrato()
    {
        return $this->belongsTo(Contratos::class, 'contrato_id');
    }

    public function pagamento_metodo()
    {
        return $this->belongsTo(PagamentoMetodo::class, 'pagamento_metodo_id');
    }
}
