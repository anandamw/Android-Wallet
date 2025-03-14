<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\Api\DepositController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth')->group(function () {
    Route::get('/data/deposit', [DepositController::class, 'index']);
    Route::get('/data/history', [DepositController::class, 'history']);
    Route::post('/deposit/store', [DepositController::class, 'store']);
    Route::post('/logout', [AuthController::class, 'logout']);
});
