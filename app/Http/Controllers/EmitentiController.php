<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Importing Models
use App\Models\Emitenti;

// Importing Resources
use App\Http\Resources\EmitentiCollection;

class EmitentiController extends Controller
{
    public function index(){
        return EmitentiCollection::collection(Emitenti::all());
        //return Emitenti::all();
    }
}
