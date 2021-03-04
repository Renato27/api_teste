<?php

namespace App\Models\Corretiva;

use App\Models\Chamado\Chamado;
use App\Models\CorretivaPatrimonio\CorretivaPatrimonio;
use App\Models\Patrimonio\Patrimonio;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Corretiva extends Model
{
    use HasFactory, SoftDeletes;

    protected $date = ['deleted_at'];
    protected $fillable = ['chamado_id', 'login_team_viewer', 'senha_team_viewer'];

    public function chamado()
    {
        return $this->belongsTo(Chamado::class, 'chamado_id');
    }

    public function patrimonios()
    {
        return $this->hasManyThrough(Patrimonio::class, CorretivaPatrimonio::class, 'corretiva_id', 'id', 'id', 'patrimonio_id');
    }

    public function hasPatrimonios()
    {
        return $this->hasMany(CorretivaPatrimonio::class, 'corretiva_id', 'id');
    }
}
