<?php

namespace App\Models\ClienteProcesso;

use App\Models\ClienteProcessoEstado\ClienteProcessoEstado;
use App\Models\Clientes\cliente;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ClienteProcesso extends Model
{
    use HasFactory, SoftDeletes;

    protected $date = ['deleted_at'];
    protected $fillable = ['cliente_id', 'cliente_processo_estado_id'];

    public function cliente()
    {
        return $this->belongsTo(cliente::class, 'cliente_id');
    }

    public function cliente_processo_estado()
    {
        return $this->belongsTo(ClienteProcessoEstado::class, 'cliente_processo_estado_id');
    }
}
