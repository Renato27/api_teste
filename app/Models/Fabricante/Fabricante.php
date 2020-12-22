<?php

namespace App\Models\Fabricante;

use App\Models\Patrimonio\Patrimonio;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Fabricante extends Model
{
    use HasFactory, SoftDeletes;

    protected $date = ['deleted_at'];
    protected $fillable = ['nome'];

    public function patrimonios()
    {
        return $this->hasMany(Patrimonio::class, 'fabricante_id', 'id');
    }
}
