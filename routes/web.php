<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\formController;
use App\Models\Customer;
use App\Http\Controllers\cookieController;
use App\Http\Controllers\sessionController;
Route::get('/', function () {
    return "welcome to my Laravel project";
});

Route::get('/form', [formController::class, 'showForm']);
Route::post('/submit', [formController::class, 'displayForm']);

// Route::get('/customer', function(){
//     $customers = Customer::all();
//     echo '<pre>';
//     print_r($customers->toArray());

// });

//set cookies
Route::get('/setcookie', [cookieController::class,('setCookie')]);
Route::get('/getcookie', [cookieController::class,('getCookie')]);
Route::get('/removecookie', [cookieController::class,('removeCookie')]);


Route::get('/setsession', [sessionController::class,('setSession')]);
Route::get('/getsession', [sessionController::class,('getSession')]);
Route::get('/removesession', [sessionController::class,('removeSession')]);