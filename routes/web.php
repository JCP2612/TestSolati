<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScuderiasController;
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
