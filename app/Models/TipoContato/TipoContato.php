<?php

namespace App\Models\TipoContato;

use App\Models\ContatoTipo\ContatoTipo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoContato extends Model
{
    use HasFactory;

    protected $fillable = ['nome'];

    public function hasContatos()
    {
        return $this->hasMany(ContatoTipo::class, 'tipo_contato_id', 'id');
    }
}
