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

/**Inicio de sesión */
Route::get('/', [UserController::class, 'index'])->name('Users.index');
Route::post('/', [UserController::class, 'verifica'])->name('Users.verifica');

/** Rutas de vehiculos*/
Route::post('/busca', [vehiculoController::class, 'index'])->name('vehiculo.index');
Route::get('/busca/edit/{id}', [vehiculoController::class, 'show'])->name('vehiculo.edit');
Route::get('/busca/{placav}', [vehiculoController::class, 'search'])->name('vehiculo.busqueda');
Route::post('/busca/edit/{id}', [vehiculoController::class, 'update'])->name('vehiculo.up');
Route::get('/vehiculo', [vehiculoController::class, 'create'])->name('vehiculo.form');
Route::post('/vehiculo/store', [vehiculoController::class, 'store'])->name('vehiculo.add');

/**Rutas de cliente */
Route::get('/cliente', [ClienteController::class, 'index'])->name('Cliente.index');
Route::post('/cliente/store', [ClienteController::class, 'store'])->name('Cliente.add');
Route::post('/cliente/salida', [ClienteController::class, 'salida'])->name('Cliente.salida');
Route::post('/cliente/update', [ClienteController::class, 'update'])->name('Cliente.up');

/**Rutas de historiales */
Route::get('/historial', [HistorialesvController::class, 'index'])->name('historial.index');
Route::post('/historial/store', [historialesvController::class, 'store'])->name('historial.store');
Route::post('/historial/salida', [historialesvController::class, 'salida'])->name('historial.salida');

/**Edición de historial */
Route::post('/historialr/salida', [HistorialrController::class, 'salida'])->name('historialr.salida');

/**Edición de transacciones.*/
Route::post('/transaccion/comentario', [TransaccionController::class, 'update'])->name('transacciones.up');