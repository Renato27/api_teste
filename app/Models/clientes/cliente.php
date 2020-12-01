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

    protected $fillable = ['razao_social', 'nome_fantasia', 'cpf_cnpj', 'inscricao_estadual', 'inscricao_municipal', 'deleted_at'];

    public function enderecos()
    {
        return $this->belongsToMany(Endereco::class)->using(ClienteEndereco::class);
    }

    public function contatos()
    {
        return $this->belongsToMany(Contato::class)->using(ClienteContato::class);
    }

    public function contratos()
    {
        return $this->belongsToMany(Contrato::class)->using(ClienteContrato::class);
    }


}
