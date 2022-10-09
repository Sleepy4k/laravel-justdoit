<?php

use App\Http\Controllers\Api\Main;
use App\Http\Controllers\Api\Auth;
use App\Http\Controllers\Api\Error;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Authenticate API Route
Route::post('login', [Auth\LoginController::class, 'index'])->name('api.login');
Route::post('register', [Auth\RegisterController::class, 'index'])->name('api.register');

Route::middleware('jwt.verify')->group(function() {
    Route::post('logout', [Auth\LogoutController::class, 'index'])->name('api.logout');
    Route::post('refresh', [Auth\RefreshController::class, 'index'])->name('api.refresh');
});

// Main API Route
Route::middleware('jwt.verify')->group(function() {
    Route::get('task', [Main\TaskController::class, 'index'])->name('api.task.index');
    Route::post('task', [Main\TaskController::class, 'store'])->name('api.task.store');
    Route::patch('task', [Main\TaskController::class, 'update'])->name('api.task.update');
    Route::delete('task', [Main\TaskController::class, 'destroy'])->name('api.task.destroy');
});

// Api Fallback Respons
Route::fallback([Error\FallbackController::class, 'index']);