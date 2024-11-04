<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('principal');
});

// metodo para obtener datos del servidor
Route::get('/register' ,[RegisterController::class, 'index'])->name('register');
// metodo para envio datos al servidor
Route::post('/register', [RegisterController::class, 'store']); 
// endpoint para ir a muro (esto es para redireccionar)
Route::get('/muro', [PostController::class, 'index'])->name('post.index');