<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MoviesController;

Route::get('/', function () {
    return view('home');
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

Route::get('/gerenciamento', [AdminController::class, 'showGerenciamento'])->name('gerenciamento');

Route::post('/gerenciamento', [MoviesController::class, 'cadFilme'])->name('envia-banco-filme');

Route::get('/', [MoviesController::class, 'index']);

Route::get('/gerenciamento', [MoviesController::class, 'gerenciarFilmes'])->name('gerenciamento');
Route::get('/alterar-filme/{id}', [MoviesController::class,  'alterarFilmeId']) -> name('mostrar-filme');

Route::put('/alterar-filme/{id}', [MoviesController::class, 'alterarFilme'])->name('alterar-filme');

Route::delete('/apagar-filme/{id}', [MoviesController::class, 'destroy'])->name('apagar-filme');
