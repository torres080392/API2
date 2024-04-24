<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvitadoControlller;


Route::view('/','menu.home')->name('menu.blade');
Route::get('/index', [InvitadoControlller::class,'index'])->name('invitado.index');
Route::get('/create', [InvitadoControlller::class,'create'])->name('invitado.create');
Route::post('/guarda', [InvitadoControlller::class,'guarda'])->name('invitado.guarda');//ruta que guarda los registros en la tabla
Route::get('/edita/{invitado}', [InvitadoControlller::class,'edita'])->name('invitado.edita');//Ruta que trae los datos para editar
Route::put('/update/{invitado}', [InvitadoControlller::class,'update'])->name('invitado.update');//Ruta que se encarga de actulizar la informacion
Route::get('/mostrar/{invitado}', [InvitadoControlller::class,'mostrar'])->name('invitado.mostrar');//Ruta que se encarga de mostrar la informacion detallada de cada invitado
Route::delete('/delete/{invitado}', [InvitadoControlller::class,'delete'])->name('invitado.delete');//Ruta que se encarga de eliminar el objeto


//Forma de aplicar una ruta sin necesidad de especificar todas 

Route::resource(' /Invitado',InvitadoControlller::class);