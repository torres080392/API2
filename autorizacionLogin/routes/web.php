<?php

use App\Http\Controllers\PersonaController;
use App\Http\Controllers\ProfileController;
use App\Models\Persona;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/index', [PersonaController::class,'index'])->name('index');
    Route::delete('/delete/{persona}', [PersonaController::class,'delete'])->name('persona.delete');
});

require __DIR__.'/auth.php';
