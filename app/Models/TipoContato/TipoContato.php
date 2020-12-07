<?php

namespace App\Models\TipoContato;

use App\Models\Contato\Contato;
use App\Models\ContatoTipo\ContatoTipo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TipoContato extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $date = ['deleted_at'];

    protected $fillable = ['nome'];

    const FINANCEIRO        = 1;
    const RESPONSAVEL_LEGAL = 2;
    const USUARIO_SISTEMA   = 3;
    const OUTRO             = 4;

    public function contatos()
    {
        return $this->belongsToMany(Contato::class, ContatoTipo::class, 'tipo_contato_id', 'id')->withTimestamps();
    }
}
