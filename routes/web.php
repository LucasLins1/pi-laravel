<?php

use App\Http\Controllers\DotmeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

//Rota create - metodo post
Route::post('cadastro' , [DotmeController::class, 'create'])->name('cadastro.post');

Route::get('/', function () {
    return view('index');
});

Route::get('/adote', function () {
    return view('adote');
});

Route::get('/desaparecidos', function () {
    return view('desaparecidos');
});

Route::get('/sobre', function () {
    return view('sobre');
});

Route::get('/cadastro', function () {
    return view('cadastro');
});

Route::get('/log', function () {
    return view('log');
});

Route::get('/sobre', function () {
    return view('sobre');
});

Route::get('/contato', function () {
    return view('contato');
});

Route::get('/apoie', function () {
    return view('apoie');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/redes', function () {
    return view('redes');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
