<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CatalogoController;
use App\Http\Controllers\MensagemController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::middleware('guest')->group(function () {
    Route::get('/', function () {
        return Inertia::render('Home');
    })->name('home');
    Route::get('/cadastrar', [UserController::class, 'create'])->name('register.create');
    Route::post('/cadastrar', [UserController::class, 'store'])->name('register.store');

    Route::get('/login', [LoginController::class, 'create'])->name('login.create');
    Route::post('/login', [LoginController::class, 'store'])->name('login.store');
    
});
Route::middleware('auth')->group(function () {
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/index', [CatalogoController::class, 'index'])->name('index');
    Route::get('/perfil', [PerfilController::class, 'create'])->name('perfil.create');
    Route::get('/mensagem', [MensagemController::class, 'create'])->name('mensagem');
});
