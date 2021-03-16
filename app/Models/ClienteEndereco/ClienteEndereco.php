<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Models\ClienteEndereco;

use App\Models\clientes\Cliente;
use App\Models\Endereco\Endereco;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ClienteEndereco extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $date = ['deleted_at'];

    protected $fillable = ['cliente_id', 'endereco_id'];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'cliente_id');
    }

    public function endereco()
    {
        return $this->belongsTo(Endereco::class, 'endereco_id');
    }
}
