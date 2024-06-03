<?php
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UsersController::class, 'index'])->name('Users.index');
Route::post('/', [UsersController::class, 'verifica'])->name('Users.verifica');

