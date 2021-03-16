<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Models\Usuario;

use App\Models\Contato\Contato;
use App\Models\Clientes\Cliente;
use App\Models\Funcionario\Funcionario;
use App\Models\TipoUsuario\TipoUsuario;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Notifications\Notifiable;
use App\Models\UsuarioCliente\UsuarioCliente;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable implements JWTSubject
{
    use HasFactory, SoftDeletes, Notifiable;

    protected $date = ['deleted_at'];

    protected $fillable = ['email', 'password', 'tipo_usuario_id', 'funcionario_id', 'contato_id'];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function getJWTIdentifier()
    {
        return $this->id;
    }

    public function tipo_usuario()
    {
        return $this->belongsTo(TipoUsuario::class, 'tipo_usuario_id');
    }

    public function clientes()
    {
        return $this->belongsToMany(Cliente::class, UsuarioCliente::class, 'usuario_id', 'cliente_id')->withTimestamps();
    }

    public function funcionario()
    {
        return $this->belongsTo(Funcionario::class, 'funcionario_id');
    }

    public function contato()
    {
        return $this->belongsTo(Contato::class, 'contato_id');
    }

    public function getJWTCustomClaims()
    {
        $contato = Contato::find($this->contato_id);
        $tipo_usuario = TipoUsuario::find($this->tipo_usuario_id);

        if ($this->tipo_usuario_id == 6) {
            return [
                'name' => $contato->nome,
                'tipo_usuario_id' => $this->tipo_usuario_id,
                'tipo_usuario' => $tipo_usuario->nome,
                'email' => $this->email,
            ];
        }

        $funcionario = Funcionario::find($this->funcionario_id);

        return [
            'name' => $funcionario->nome,
            'tipo_usuario_id' => $this->tipo_usuario_id,
            'tipo_usuario' => $tipo_usuario->nome,
            'email' => $this->email,
        ];
    }
}
