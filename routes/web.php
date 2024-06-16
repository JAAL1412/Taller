<?php
use App\Http\Controllers\UserController;
use App\Http\Controllers\VehiculoController;
use App\Http\Controllers\HistorialrController;
use App\Http\Controllers\HistrialvController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\TransaccionController;
use App\Http\Controllers\AgregarController;

use App\Models\historialr;
use Illuminate\Support\Facades\Route;


Route::get('/', [UserController::class, 'index'])->name('Users.index');
Route::post('/', [UserController::class, 'verifica'])->name('Users.verifica');

Route::post('/busca', [vehiculoController::class, 'index'])->name('vehiculo.index');
Route::get('/busca', [vehiculoController::class, 'index2'])->name('vehiculo.index2');
Route::get('/busca/edit/{id}', [vehiculoController::class, 'show'])->name('vehiculo.edit');
Route::post('/busca/edit/{id}', [vehiculoController::class, 'update'])->name('vehiculo.up');
Route::post('/vehiculo/store', [vehiculoController::class, 'store'])->name('vehiculo.add');
Route::get('/editar', [histrialvController::class, 'index'])->name('hist1.index');

Route::get('/formularios', [ClienteController::class, 'index'])->name('clie.index');


