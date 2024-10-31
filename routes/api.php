<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\penggunaController;
use App\Http\Controllers\aplikasiController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::middleware('auth:sanctum')->get('user', [penggunaController::class, 'index']);
Route::get('/penggunaAplikasi',[penggunaController::class, 'index']);
Route::get('/aplikasi',[aplikasiController::class, 'index']);
