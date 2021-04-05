<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Models\ContatoTipo;

use App\Models\Contato\Contato;
use App\Models\TipoContato\TipoContato;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ContatoTipo extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $date = ['deleted_at'];

    protected $fillable = ['contato_id', 'tipo_contato_id'];

    public function contato()
    {
        return $this->belongsTo(Contato::class, 'contato_id');
    }

    public function tipo_contato()
    {
        return $this->belongsTo(TipoContato::class, 'tipo_contato_id');
    }
}
