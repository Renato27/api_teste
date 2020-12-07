<?php

namespace App\Models\Contato;

use App\Models\ClienteContato\ClienteContato;
use App\Models\ContatoContrato\ContatoContrato;
use App\Models\ContatoEmail\ContatoEmail;
use App\Models\ContatoEnderecos\ContatoEnderecos;
use App\Models\ContatoTipo\ContatoTipo;
use App\Models\TipoContato\TipoContato;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contato extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $date = ['deleted_at'];

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
