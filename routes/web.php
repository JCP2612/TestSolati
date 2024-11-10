<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScuderiasController;
use App\Http\Controllers\DriversController;
use App\Http\Controllers\GrandPrixController;
use App\Models\Drivers;
use App\Models\Scuderias;
use Illuminate\Support\Facades\Http;


Route::get('/csrf-token', function () {
    return response()->json(['_token' => csrf_token()]);
});

Route::get('/scuderias', [ScuderiasController::class, 'index']);
Route::get('/scuderias/{id}', [ScuderiasController::class, 'show']);
Route::post('/scuderias/create', [ScuderiasController::class, 'store']);
Route::put('/scuderias/update/{id}', [ScuderiasController::class, 'update']);
Route::delete('/scuderias/{id}', [ScuderiasController::class, 'destroy']);
Route::get('/drivers', [DriversController::class, 'index']);
Route::post('/drivers/create', [DriversController::class, 'store']);
Route::put('/drivers/update/{id}', [DriversController::class, 'update']);
Route::get('/drivers/{id}', [DriversController::class, 'show']);
Route::get('/grandprix/{id}', [GrandPrixController::class, 'show']);
Route::get('/grandprix', [GrandPrixController::class, 'index']);
Route::post('/grandprix/create', [GrandPrixController::class, 'store']);
Route::put('/grandprix/update/{id}', [GrandPrixController::class, 'update']);
