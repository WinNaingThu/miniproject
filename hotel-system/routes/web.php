<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservationController;

Route::get('/', function () {
    return view('welcome');
});

// Main Page
Route::get('/', [ReservationController::class, 'index'])->name('reservations.index');

// Create Form Page
Route::get('/reservations/create', [ReservationController::class, 'create'])->name('reservations.create');

// Store Data
Route::post('/reservations/store', [ReservationController::class, 'store'])->name('reservations.store');

// Edit Form Page
Route::get('/reservations/{reservation_id}/edit', [ReservationController::class, 'edit'])->name('reservations.edit');

// Update Data
Route::put('/reservations/{reservation_id}/update', [ReservationController::class, 'update'])->name('reservations.update');

// Delete Data
Route::delete('/reservations/{reservation_id}/delete', [ReservationController::class, 'destroy'])->name('reservations.destroy');

