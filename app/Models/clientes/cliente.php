<?php

namespace App\Models\Clientes;

use App\Models\ClienteContato\ClienteContato;
use App\Models\ClienteContrato\ClienteContrato;
use App\Models\ClienteEndereco\ClienteEndereco;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cliente extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $date = ['deleted_at'];

    protected $fillable = ['razao_social', 'nome_fantasia', 'cpf_cnpj', 'inscricao_estadual', 'inscricao_municipal'];

    public function hasEnderecos()
    {
        return $this->hasMany(ClienteEndereco::class, 'cliente_id', 'id');
    }

    public function hasContatos()
    {
        return $this->hasMany(ClienteContato::class, 'cliente_id', 'id');
    }

    public function hasContratos()
    {
        return $this->hasMany(ClienteContrato::class, 'cliente_id', 'id');
    }


}
