<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
});
Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
    //retrieve patient appointment below
    Route::get('/dashboard', [AppointmentController::class, 'getAppointments']);
    Route::post('/appointment/store', [AppointmentController::class, 'store'])->name('appointment.store');
    Route::get('patient', [PatientController::class, 'index'])->name('patient.index');
    Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
    Route::post('/services/create', [ServiceController::class, 'createService'])->name('services.create');
    // Route to display the edit form for a specific service
    Route::get('/services/{id}/edit', [ServiceController::class, 'edit'])->name('services.edit');
    Route::delete('/login', [AuthController::class, 'logout'])->name('logout');
});

Route::get('/appointment', [AppointmentController::class, 'index'])->name('appointment.index');

// Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

// Route::get('patient', [PatientController::class, 'index'])->name('patient.index');
// Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
// Route::post('/services/create', [ServiceController::class, 'createService'])->name('services.create');
// // Route to display the edit form for a specific service
// Route::get('/services/{id}/edit', [ServiceController::class, 'edit'])->name('services.edit');

// Route::get('/dashboard', [AppointmentController::class, 'getAppointments']);

// // Route to handle the update of a specific service
// Route::put('/services/{id}', [ServiceController::class, 'updateService'])->name('services.update');
// Route::delete('/services/{id}', [ServiceController::class, 'destroy'])->name('services.destroy');

// //retrieve patient appointment below
// Route::post('/appointment/store', [AppointmentController::class, 'store'])->name('appointment.store');
// Route::get('/appointment', [AppointmentController::class, 'index'])->name('appointment.index');
