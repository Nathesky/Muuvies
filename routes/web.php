<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MoviesController;

Route::get('/', function () {
    return view('home');
});

Route::get('/gerenciamento', [AdminController::class, 'showGerenciamento'])->name('gerenciamento');

Route::post('/gerenciamento', [MoviesController::class, 'cadFilme'])->name('envia-banco-filme');



