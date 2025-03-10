<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DepositController;
use App\Http\Controllers\HomePageController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use Monolog\Handler\RotatingFileHandler;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware('guest')->group(function () {

    Route::get('/', function () {
        return view('auth.login');
    })->name('login');

    Route::post('/login', [AuthController::class, 'login']);
});

Route::middleware('auth')->group(function () {

    Route::redirect('/home', '/pages');

    Route::get('/pages', [HomePageController::class, 'index']);
    Route::get('/deposit', [DepositController::class, 'index']);
    Route::post('/deposit/insert', [DepositController::class, 'insert']);
    Route::get('/history', [HomePageController::class, 'history']);
    Route::get('/stats', [HomePageController::class, 'stats']);
    Route::get('/logout', [AuthController::class, 'logout']);
    Route::post('/whatsapp/command', [DepositController::class, 'handleWhatsAppCommand']);

});
