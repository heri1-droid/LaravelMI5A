<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FakultasController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProdiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('fakultas', [FakultasController::class, 'getFakultas'])->middleware('auth:sanctum');
Route::get('prodi', [ProdiController::class, 'getProdi'])->middleware('auth:sanctum');
Route::get('mahasiswa', [MahasiswaController::class, 'getMahasiswa'])->middleware('auth:sanctum');

Route::post('fakultas', [FakultasController::class, 'storeFakultas']);
Route::post('prodi', [ProdiController::class, 'storeProdi']);

Route::delete('fakultas', [FakultasController::class, 'storeFakultas']);

Route::post('login', [AuthController::class, 'login']);
//Route::get('register', [AuthController::class, 'register']);


