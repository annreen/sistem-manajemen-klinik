<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SpecialistController;
use App\Http\Controllers\DoctorController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('specialists', SpecialistController::class);
Route::apiResource('doctors', DoctorController::class);