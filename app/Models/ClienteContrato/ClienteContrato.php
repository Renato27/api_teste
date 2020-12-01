<?php

namespace App\Models\ClienteContrato;

use App\Models\clientes\Cliente;
use App\Models\Contratos\Contrato;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClienteContrato extends Model
{
    use HasFactory;

    protected $fillable = ['cliente_id', 'contrato_id'];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'cliente_id');
    }

    public function contrato()
    {
        return $this->belongsTo(Contrato::class, 'contrato_id');
    }
}
