<?php

namespace App\Http\Controllers;

use App\Models\IstoricRadieri;
use Illuminate\Http\Request;

class IstoricRadieriController extends Controller
{
    public function index(){
        return IstoricRadieri::all();
    }
}
