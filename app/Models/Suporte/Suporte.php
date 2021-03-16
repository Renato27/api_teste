<?php

/*
 * Esse arquivo faz parte de Lógica Tecnologia/SGL
 * (c) Renato Maldonado mallldonado@gmail.com
 */

namespace App\Models\Suporte;

use App\Models\Chamado\Chamado;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\SuporteInteracao\SuporteInteracao;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Suporte extends Model
{
    use HasFactory, SoftDeletes;

    protected $date = ['deleted_at'];

    protected $fillable = ['chamado_id', 'login_team_viewer', 'senha_team_viewer'];

    public function chamado()
    {
        return $this->belongsTo(Chamado::class, 'chamado_id');
    }

    public function interacoes()
    {
        return $this->hasMany(SuporteInteracao::class, 'suporte_id', 'id');
    }
}
