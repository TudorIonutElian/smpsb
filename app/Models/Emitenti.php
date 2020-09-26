<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emitenti extends Model
{
    protected $table = 'emitenti';
    public $timestamps = false;

    public function getActe(){
        return $this->hasMany('App\Models\Acte', 'emitent', 'id');
    }
}
