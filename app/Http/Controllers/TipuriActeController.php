<?php

namespace App\Http\Controllers;

use App\Http\Resources\TipuriActeCollection;
use App\Models\TipuriActe;
use Illuminate\Http\Request;

class TipuriActeController extends Controller
{
    public function index(){
        return TipuriActeCollection::collection(TipuriActe::all());
    }
}
