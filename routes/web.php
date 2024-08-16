<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScuderiasController;
use Illuminate\Support\Facades\Http;


Route::get('/csrf-token', function () {
    return response()->json(['_token' => csrf_token()]);
});

Route::get('/scuderias', [ScuderiasController::class, 'index']);
Route::get('/scuderias/create', [ScuderiasController::class, 'store'])->name('views.create');;
Route::put('/scuderias/update/{id}', [ScuderiasController::class, 'update']);
Route::delete('/scuderias/{id}', [ScuderiasController::class, 'destroy']);
