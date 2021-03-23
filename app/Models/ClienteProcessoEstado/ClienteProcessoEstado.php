<?php

namespace App\Models\ClienteProcessoEstado;

use App\Models\ClienteProcesso\ClienteProcesso;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ClienteProcessoEstado extends Model
{
    use HasFactory, SoftDeletes;

    protected $date = ['deleted_at'];
    protected $fillable = ['nome'];

    public function cliente_processos()
    {
        return $this->hasMany(ClienteProcesso::class, 'cliente_processo_estado_id', 'id');
    }
}
