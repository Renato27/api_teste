<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Models\Clientes;

use App\Models\Contato\Contato;
use App\Models\Usuario\Usuario;
use App\Models\Endereco\Endereco;
use App\Models\Contratos\Contrato;
use Illuminate\Database\Eloquent\Model;
use App\Models\ClienteContato\ClienteContato;
use App\Models\UsuarioCliente\UsuarioCliente;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\ClienteContrato\ClienteContrato;
use App\Models\ClienteEndereco\ClienteEndereco;
use App\Models\ClienteProcesso\ClienteProcesso;
use App\Models\Nota\Nota;
use App\Models\NotaSerasa\NotaSerasa;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class cliente extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $date = ['deleted_at'];

    protected $fillable = ['razao_social', 'nome_fantasia', 'cpf_cnpj', 'inscricao_estadual', 'inscricao_municipal'];

    public function enderecos()
    {
        return $this->belongsToMany(Endereco::class, ClienteEndereco::class, 'cliente_id', 'endereco_id')->withTimestamps();
    }

    public function contatos()
    {
        return $this->belongsToMany(Contato::class, ClienteContato::class, 'cliente_id', 'contato_id')->withTimestamps();
    }

    public function contratos()
    {
        return $this->belongsToMany(Contrato::class, ClienteContrato::class, 'cliente_id', 'contrato_id')->withTimestamps();
    }

    public function usuarios()
    {
        return $this->belongsToMany(Usuario::class, UsuarioCliente::class, 'cliente_id', 'usuario_id')->withTimestamps();
    }

    public function notas_serasa()
    {
        return $this->hasMany(NotaSerasa::class, 'cliente_id', 'id');
    }

    public function notas()
    {
        return $this->hasMany(Nota::class, 'cliente_id', 'id');
    }

    public function processo()
    {
        return $this->hasOne(ClienteProcesso::class, 'cliente_id', 'id');
    }

}
