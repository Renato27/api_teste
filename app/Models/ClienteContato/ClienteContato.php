<?php

namespace App\Models\ClienteContato;

use App\Models\clientes\Cliente;
use App\Models\Contato\Contato;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClienteContato extends Model
{
    use HasFactory;

    protected $fillable = ['contato_id', 'cliente_id', 'principal'];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'cliente_id');
    }

    public function contato()
    {
        return $this->belongsTo(Contato::class, 'contato_id');
    }
}
