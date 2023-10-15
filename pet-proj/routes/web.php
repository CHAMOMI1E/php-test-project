<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;


Route::get('/', [MainController::class, 'home'])->name('home');

Route::get('/add_post', [MainController::class, 'add_post']);
Route::post('/add_post/valid', [MainController::class, 'post_valid']);

Route::get('/read/{id}', [MainController::class, 'reader']);
