<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('foods',FoodController::class);
Route::resource('customers', CustomerController::class);
Route::resource('orders', OrderController::class);