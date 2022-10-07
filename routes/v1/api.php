<?php

use App\Http\Controllers\Api\Auth;
use App\Http\Controllers\LandingController;

/*
|--------------------------------------------------------------------------
| API V1 Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::any('/', [LandingController::class, 'api'])->name('api.landing');
Route::post('login', [Auth\LoginController::class, 'login'])->name('api.login');

Route::middleware('auth:api')->group(function() {
    Route::get('transaction', [LandingController::class, 'api'])->name('api.transaction');
    Route::get('tour', [LandingController::class, 'api'])->name('api.tour');
    Route::get('profile', [LandingController::class, 'api'])->name('api.profile');
    Route::get('company', [LandingController::class, 'api'])->name('api.company');
    Route::post('logout', [Auth\LogoutController::class, 'logout'])->name('api.logout');
    Route::post('refresh', [Auth\RefreshController::class, 'api'])->name('api.refresh');
});