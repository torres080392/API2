<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Counter;
use App\Http\Livewire\Negocio;

Route::get('livewire.negocio',Negocio::class)->name('livewire.negocio');

Route::get('/', function () { return view('welcome');});
