<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppointmentController;

Route::get('/', function () {
    return view('client.appointment');
});

Route::post('/appointment/store', [AppointmentController::class, 'store'])->name('appointment.store');
//retrieve patient appointment below
Route::get('/appointments', [AppointmentController::class, 'index'])->name('appointments.index');




