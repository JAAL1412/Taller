<?php
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'index'])->name('Users.index');
Route::post('/', [UserController::class, 'verifica'])->name('Users.verifica');

