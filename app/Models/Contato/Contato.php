<?php

namespace App\Models\Contato;

use App\Models\ClienteContato\ClienteContato;
use App\Models\ContatoContrato\ContatoContrato;
use App\Models\ContatoEmail\ContatoEmail;
use App\Models\ContatoEnderecos\ContatoEnderecos;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'cargo', 'telefone', 'celular'];

    public function emails()
    {
        return $this->hasMany(ContatoEmail::class, 'contato_id', 'id');
    }

    public function hasContratos()
    {
        return $this->hasMany(ContatoContrato::class, 'contato_id', 'id');
    }

    public function hasEnderecos()
    {
        return $this->hasMany(ContatoEnderecos::class, 'contato_id', 'id');
    }

    public function hasCliente()
    {
        return $this->hasOne(ClienteContato::class, 'contato_id', 'id');
    }
}
