<?php

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
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

Route::get('/data/deposit', [DepositController::class, 'index']);
Route::get('/data/history', [DepositController::class, 'history']);


Route::post('/data/deposit/insert', [DepositController::class, 'insert']);

Route::get('/data/pages', [HomePageController::class, 'index']);
Route::get('/stats', [HomePageController::class, 'stats']);
Route::get('/logout', [AuthController::class, 'logout']);
Route::post('/whatsapp/command', [DepositController::class, 'handleWhatsAppCommand']);
