<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquipoController;
use App\Http\Controllers\ClienteController;


Route::get('/',[EquipoController::class,'index'])->name('equipo.index');
Route::get('/cliente',[ClienteController::class,'index'])->name('cliente.index');