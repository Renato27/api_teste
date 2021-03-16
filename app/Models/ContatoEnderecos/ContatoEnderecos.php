<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Models\ContatoEnderecos;

use App\Models\Contato\Contato;
use App\Models\Endereco\Endereco;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ContatoEnderecos extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $date = ['deleted_at'];

    protected $fillable = ['contato_id', 'endereco_id'];

    public function contato()
    {
        return $this->belongsTo(Contato::class, 'contato_id');
    }

    public function endereco()
    {
        return $this->belongsTo(Endereco::class, ' endereco_id');
    }
}
