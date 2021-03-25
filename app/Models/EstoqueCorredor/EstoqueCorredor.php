<?php

namespace App\Models\EstoqueCorredor;

use App\Models\EstoqueSala\EstoqueSala;
use App\Models\Patrimonio\Patrimonio;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EstoqueCorredor extends Model
{
    use HasFactory, SoftDeletes;

    protected $date = ['deleted_at'];
    protected $fillable = ['corredor', 'estoque_sala_id', 'patrimonio_id'];

    public function estoque_sala()
    {
        return $this->belongsTo(EstoqueSala::class, 'estoque_sala_id');
    }

    public function patrimonio()
    {
        return $this->belongsTo(Patrimonio::class, 'patrimonio_id');
    }
}
