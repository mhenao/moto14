<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MotoController;
use Illuminate\Support\Facades\Route;
use App\Models\User;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');

Route::post('/motos', [MotoController::class, 'store']);
Route::get('/motos', [MotoController::class, 'index']);

Route::get('/test-users', function () {
    return response()->json(User::all());
});

Route::get('/health', function () {
    return response()->json([
        'status' => 'ok',
        'message' => 'Laravel está funcionando correctamente 🚀'
    ]);
});
