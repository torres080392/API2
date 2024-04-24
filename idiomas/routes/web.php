<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BienvenidaController;

Route::get('/Bienvenida',[BienvenidaController::class,'index'])->name('index');

Route::get('/', function () {
    return view('welcome');
});
