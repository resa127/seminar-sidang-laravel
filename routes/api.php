<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\RegistrationController;

Route::get('/registrations', [RegistrationController::class, 'index']);
Route::post('/registrations', [RegistrationController::class, 'store']);
Route::get('/registrations/{id}', [RegistrationController::class, 'show']);
Route::patch('/registrations/{id}', [RegistrationController::class, 'update']);
Route::delete('/registrations/{id}', [RegistrationController::class, 'destroy']);