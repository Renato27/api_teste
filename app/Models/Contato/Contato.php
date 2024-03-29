<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Models\Contato;

use App\Models\Endereco\Endereco;
use App\Models\Contratos\Contrato;
use App\Models\ContatoTipo\ContatoTipo;
use App\Models\TipoContato\TipoContato;
use Illuminate\Database\Eloquent\Model;
use App\Models\ContatoEmail\ContatoEmail;
use App\Models\ClienteContato\ClienteContato;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\ContatoContrato\ContatoContrato;
use App\Models\ContatoEnderecos\ContatoEnderecos;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contato extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $date = ['deleted_at'];

    protected $fillable = ['nome', 'cargo', 'telefone', 'celular', 'principal'];

    public function emails()
    {
        return $this->hasMany(ContatoEmail::class, 'contato_id', 'id');
    }

    public function contratos()
    {
        return $this->hasManyThrough(Contrato::class, ContatoContrato::class, 'contato_id', 'id');
    }

    public function enderecos()
    {
        return $this->hasManyThrough(Endereco::class, ContatoEnderecos::class, 'contato_id', 'id');
    }

    public function cliente()
    {
        return $this->belongsToMany(Cliente::class, ClienteContato::class, 'cliente_id', 'id');
    }

    public function tipo_contatos()
    {
        return $this->belongsToMany(TipoContato::class, ContatoTipo::class, 'tipo_contato_id', 'id')->withTimestamps();
    }

    public function assinatura()
    {
        return $this->morphTo();
    }
}
