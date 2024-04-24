<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InformacionController;

Route::get('/', [InformacionController::class,'index'])->name('index');
Route::get('/create', [InformacionController::class,'create'])->name('create');
Route::post('/store', [InformacionController::class,'store'])->name('store');
Route::delete('/informaciones/{id}', [InformacionController::class, 'destroy'])->name('informaciones.destroy');
