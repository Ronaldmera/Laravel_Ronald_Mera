<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormularioController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/formulario',[FormularioController::class,'solicitar']);
Route::post('/resultados',[FormularioController::class,'calcular'])->name('valores');
