<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\formController;
Route::get('/', function () {
    return "welcome to my Laravel project";
});

Route::get('/form', [formController::class, 'showForm']);
Route::post('/submit', [formController::class, 'displayForm']);


