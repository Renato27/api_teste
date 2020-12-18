<?php

namespace App\Models\Usuario;

use App\Models\Clientes\Cliente;
use App\Models\TipoUsuario\TipoUsuario;
use App\Models\UsuarioCliente\UsuarioCliente;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use IlluminateNotificationsNotifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    use HasFactory, SoftDeletes;

    protected $date = ['deleted_at'];

    protected $fillable = ['email', 'senha', 'tipo_usuario_id', 'funcionario_id', 'contato_id',
    'cliente_visualizacao_patrimonio_id'];

    protected $hidden = [
        'senha',
        'remember_token',
    ];

    public function tipo_usuario()
    {
        return $this->belongsTo(TipoUsuario::class, 'tipo_usuario_id');
    }

    public function clientes()
    {
        return $this->belongsToMany(Cliente::class, UsuarioCliente::class, 'usuario_id', 'cliente_id')->withTimestamps();
    }
}
