<?php

use App\Http\Controllers\Fallback;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [LandingController::class, 'web'])->name('landing');

require __DIR__.'/'.config('app.version').'/web.php';

Route::fallback([Fallback\WebController::class, 'index']);