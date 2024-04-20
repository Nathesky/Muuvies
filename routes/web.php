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

Route::get('/', [MoviesController::class, 'index']);

Route::get('/gerenciamento', [MoviesController::class, 'gerenciarFilmes'])->name('gerenciamento');
Route::get('/alterar-filme/{id}', [MoviesController::class,  'alterarFilmeId']) -> name('mostrar-filme');

Route::put('/alterar-filme/{id}', [MoviesController::class, 'alterarFilme'])->name('alterar-filme');

Route::delete('/apagar-filme/{id}', [MoviesController::class, 'destroy'])->name('apagar-filme');

