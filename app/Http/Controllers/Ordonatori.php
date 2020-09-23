<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ordonatori extends Controller
{
    public function index(){
        return [1,2, 3, 'tests'];
    }
}
