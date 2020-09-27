<?php

namespace App\Http\Controllers;

use App\Http\Resources\ActeCollection;
use Illuminate\Http\Request;

// Importare Models from App\Models\ModelName
use App\Models\Acte;

class ActeController extends Controller
{
    public function index(){
        return ActeCollection::collection(Acte::all());
    }
}
