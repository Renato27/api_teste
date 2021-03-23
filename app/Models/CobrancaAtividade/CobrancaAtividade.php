<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Models\CobrancaAtividade;

use App\Models\Usuario\Usuario;
use App\Models\Cobranca\Cobranca;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CobrancaAtividade extends Model
{
    use HasFactory, SoftDeletes;

    protected $date = ['deleted_at'];
    protected $fillable = ['data_contato', 'responsavel', 'detalhes', 'cobranca_id', 'usuario_id'];

    public function cobranca()
    {
        return $this->belongsTo(Cobranca::class, 'cobranca_id');
    }

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'usuario_id');
    }
}
