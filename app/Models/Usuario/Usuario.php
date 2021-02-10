<?php

namespace App\Models\Usuario;

use App\Models\Clientes\Cliente;
use App\Models\ClienteVisualizacaoPatrimonio\ClienteVisualizacaoPatrimonio;
use App\Models\Contato\Contato;
use App\Models\Funcionario\Funcionario;
use App\Models\TipoUsuario\TipoUsuario;
use App\Models\UsuarioCliente\UsuarioCliente;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use IlluminateNotificationsNotifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class Usuario extends Authenticatable implements JWTSubject
{
    use HasFactory, SoftDeletes, Notifiable;

    protected $date = ['deleted_at'];

    protected $fillable = ['email', 'password', 'tipo_usuario_id', 'funcionario_id', 'contato_id',
    'cliente_visualizacao_patrimonio_id'];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function getJWTIdentifier()
    {
        return $this->getKey();
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

    public function cliente_visualizacao_patrimonio()
    {
        return $this->belongsTo(ClienteVisualizacaoPatrimonio::class, 'cliente_visualizacao_patrimonio_id');
    }

    public function getJWTCustomClaims()
    {
        $nome = Contato::find($this->contato_id);

        return [
            'name'          => $nome,
            'tipo_usuario'  => $this->tipo_usuario_id,
            'email'         => $this->email
        ];
    }
}
