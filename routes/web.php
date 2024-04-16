<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;


Route::get('/', function () {
    return view('home');
});

Route::get('/gerenciamento', [AdminController::class, 'showGerenciamento'])->name('gerenciamento');


