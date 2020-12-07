<?php

namespace App\Models\Clientes;

use App\Models\ClienteContato\ClienteContato;
use App\Models\ClienteContrato\ClienteContrato;
use App\Models\ClienteEndereco\ClienteEndereco;
use App\Models\Contato\Contato;
use App\Models\Contratos\Contrato;
use App\Models\Endereco\Endereco;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cliente extends Model
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


}
