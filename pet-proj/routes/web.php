<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;


Route::get('/', [MainController::class, 'home']);

Route::get('/form', [MainController::class, 'form']);
Route::post('/form/check', [MainController::class, 'form_check']);
