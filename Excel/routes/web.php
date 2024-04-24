<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ExportProductController;
use App\Http\Controllers\ImportProductController;

Route::get('export-products', [ExportProductController::class, 'export'])->name('export.products');
Route::post('import-products', [ImportProductController::class, 'import'])->name('import.products');
