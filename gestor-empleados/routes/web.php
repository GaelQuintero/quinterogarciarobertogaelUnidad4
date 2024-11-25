<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::middleware("guest")->group(function () {
    Route::get('/', [AuthController::class, 'index'])->name('login-empleado');

    Route::get('/registro-empleado', [AuthController::class, 'registroEmpleado'])->name('registro-empleado');

    Route::post('/registrar-empleado', [AuthController::class, 'registrarEmpleado'])->name('registrar-empleado');

    Route::post('/', [AuthController::class, 'login'])->name('login');
});


Route::middleware("auth")->group(function () {
    Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::get('/empleados', [AuthController::class, 'mostrarEmpleados'])->name('empleados');
