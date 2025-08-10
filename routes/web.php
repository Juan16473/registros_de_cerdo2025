<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Producto1Controller;
use App\Http\Controllers\Settings\ProfileController;

Route::middleware(['auth'])->group(function () {
    Route::get('/settings/profile', [ProfileController::class, 'edit'])->name('settings.profile');
    Route::put('/settings/profile', [ProfileController::class, 'update'])->name('settings.profile.update');
});

Route::get('/', [Producto1Controller::class, 'index'])->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

// Mostrar el formulario para crear un producto
Route::get('/productos/create', [Producto1Controller::class, 'create'])->name('productos.create');

// Guardar el producto en la base de datos
Route::post('/productos', [Producto1Controller::class, 'store'])->name('productos.store');


require __DIR__.'/auth.php';
