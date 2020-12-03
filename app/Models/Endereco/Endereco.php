<?php

namespace App\Models\Endereco;

use App\Models\ClienteEndereco\ClienteEndereco;
use App\Models\ContatoEnderecos\ContatoEnderecos;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Endereco extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $date = ['deleted_at'];

    protected $fillable = ['rua', 'numero', 'bairro', 'complemento', 'cidade', 'estado', 'cep'];

    public function hasContatos()
    {
        return $this->hasMany(ContatoEnderecos::class, 'endereco_id', 'id');
    }

    public function hasCliente()
    {
        return $this->hasOne(ClienteEndereco::class, 'endereco_id', 'id');
    }
}
