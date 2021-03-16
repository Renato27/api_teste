<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Models\TipoUsuario;

use App\Models\Usuario\Usuario;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TipoUsuario extends Model
{
    use HasFactory;

    protected $fillable = ['nome'];

    const SUPORTE = 1;

    const SUPORTE_NIVEL_2 = 2;

    const ESTOQUISTA = 3;

    const ASSISTENTE = 4;

    const GESTAO = 5;

    const CLIENTE = 6;

    public function usuarios()
    {
        return $this->hasMany(Usuario::class, 'tipo_usuario_id', 'id');
    }
}
