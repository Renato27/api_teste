<?php

namespace App\Models\Contato;

use App\Models\ClienteContato\ClienteContato;
use App\Models\ContatoContrato\ContatoContrato;
use App\Models\ContatoEmail\ContatoEmail;
use App\Models\ContatoEnderecos\ContatoEnderecos;
use App\Models\ContatoTipo\ContatoTipo;
use App\Models\Contratos\Contrato;
use App\Models\Endereco\Endereco;
use App\Models\TipoContato\TipoContato;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

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
