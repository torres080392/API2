<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;//importando el controlador

//rutas 

//Route::view('/','index')->name('home');
//Route::view('/personas','personas')->name('personas');
//Route::view('/equipos','equipos')->name('equipos');
route::get('/',[UserController::class,'index'])->name('indexUser');
route::get('/create',[UserController::class,'create'])->name('UserCreate');






?>