<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\formController;
use App\Models\Customer;
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