<?php
use App\Http\Controllers\UserController;
use App\Http\Controllers\VehiculoController;
use App\Http\Controllers\HistorialrController;
use App\Http\Controllers\HistorialesvController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\TransaccionController;
use App\Http\Controllers\AgregarController;
use App\Models\historialesv;
use App\Models\historialr;
use App\Models\vehiculo;
use Illuminate\Support\Facades\Route;


Route::get('/', [UserController::class, 'index'])->name('Users.index');
Route::post('/', [UserController::class, 'verifica'])->name('Users.verifica');

Route::post('/busca', [vehiculoController::class, 'index'])->name('vehiculo.index');
Route::get('/busca/edit/{id}', [vehiculoController::class, 'show'])->name('vehiculo.edit');
Route::post('/busca/edit/{id}', [vehiculoController::class, 'update'])->name('vehiculo.up');
Route::get('/formularios', [vehiculoController::class, 'create'])->name('form.index');
Route::post('/vehiculo/store', [vehiculoController::class, 'store'])->name('vehiculo.add');

Route::get('/editar', [HistorialesvController::class, 'index'])->name('hist1.index');
Route::get('/cliente', [ClienteController::class, 'index'])->name('Cliente.index');
Route::post('/cliente/store', [ClienteController::class, 'store'])->name('Cliente.add');

Route::post('/historial/store', [historialesvController::class, 'store'])->name('historial.store');
Route::post('/historial/salida', [historialesvController::class, 'salida'])->name('historial.salida');
