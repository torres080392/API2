<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\User;

//Route::resource('/user',UserController::class);

Route::get('/', [UserController::class,'index'])->name('user.index');