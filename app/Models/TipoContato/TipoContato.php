<?php

namespace App\Models\TipoContato;

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

    public function hasContatos()
    {
        return $this->hasMany(ContatoTipo::class, 'tipo_contato_id', 'id');
    }
}
