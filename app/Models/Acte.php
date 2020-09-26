<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Emitenti;

class Acte extends Model
{
    protected $table = 'acte';
    public $timestamps = false;

    public function getEmitent(){
        return $this->belongsTo(Emitenti::class, 'emitent', 'id');
    }
}
