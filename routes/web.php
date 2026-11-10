<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehiculoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/vehiculos', [VehiculoController::class, 'index'])->name('vehiculos.index');
Route::post('/vehiculos', [VehiculoController::class, 'store'])->name('vehiculos.store');
Route::delete('/vehiculos/{id}', [VehiculoController::class, 'destroy'])->name('vehiculos.destroy');
Route::put('/vehiculos/{vehiculo}', [VehiculoController::class, 'update'])->name('vehiculos.update');