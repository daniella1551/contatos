<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', [ContactController::class, 'index']);

Route::get('/contacts', [ContactController::class, 'index']);

Route::get('/contacts/create', [ContactController::class, 'create']);

Route::post('/contacts/store', [ContactController::class, 'store']);

Route::get('/contacts/edit/{id}', [ContactController::class, 'edit']);

Route::post('/contacts/update/{id}', [ContactController::class, 'update']);

Route::get('/contacts/delete/{id}', [ContactController::class, 'destroy']);