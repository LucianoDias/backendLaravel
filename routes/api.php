<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/users', [UserController::class , 'imdex']);
Route::get('/users/{user}', [UserController::class , 'show']);
