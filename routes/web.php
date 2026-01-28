<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PrincipalController;


Route::get('/hello',HomeController::class);
Route::get('/posts/mensaje', [PostController::class, 'Mensaje']);




