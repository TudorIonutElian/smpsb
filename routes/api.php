<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Ordonatori;
use App\Http\Controllers\EmitentiController;
use App\Http\Controllers\TipuriActeController;
use App\Http\Controllers\ActeController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/ordonatori', [Ordonatori::class, 'index']);

// Emitenti Controller
Route::get('emitenti', [EmitentiController::class, 'index']);
Route::post('emitenti-adaugare', [EmitentiController::class, 'adaugare']);
Route::get('emitenti/{id}/acte', [EmitentiController::class, 'getActe']);
Route::post('emitenti-radiere', [EmitentiController::class, 'radiere']);

// Tipuri Acte Controller
Route::get('tipuri-acte', [TipuriActeController::class, 'index']);

// Acte Controller
Route::get('acte', [ActeController::class, 'index']);
