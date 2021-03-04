<?php

namespace App\Models\PreventivaPatrimonio;

use App\Models\Patrimonio\Patrimonio;
use App\Models\Preventiva\Preventiva;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PreventivaPatrimonio extends Model
{
    use HasFactory, SoftDeletes;

    protected $date = ['deleted_at'];
    protected $fillable = ['preventiva_id', 'patrimonio_id'];

    public function preventiva()
    {
        return $this->belongsTo(Preventiva::class, 'preventiva_id');
    }

    public function patrimonio()
    {
        return $this->belongsTo(Patrimonio::class, 'patrimonio_id');
    }
}
