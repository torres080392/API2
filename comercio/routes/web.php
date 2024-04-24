<?php

use App\Http\Controllers\Buscador;
use App\Http\Controllers\Categoria;
use App\Http\Controllers\Producto;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Usuario;
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
    Route::get('/producto', [Producto::class, 'index'])->name('producto-index');
    Route::get('/usuario', [Usuario::class, 'index'])->name('usuario-index');
    Route::get('/categoria', [Categoria::class, 'index'])->name('categoria-index');
    Route::get('/buscador', [Buscador::class, 'index'])->name('buscador-index');
    
});

require __DIR__.'/auth.php';
