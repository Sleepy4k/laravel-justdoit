<?php

use App\Http\Controllers\Page\Main;
use App\Http\Controllers\Page\Auth;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Page\Audit;
use App\Http\Controllers\Page\Admin;
use App\Http\Controllers\Page\System;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Page\Setting;
use App\Http\Controllers\WelcomeController;

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

// App Set Default Locale
App::setLocale(config('app.locale', 'en'));

// Init Route
Route::middleware('Language')->group(function() {
    // Default Web Route
    Route::get('',
        [WelcomeController::class, 'index']
    )->name('landing');
    
    // Authenticate Web Route
    Route::middleware('guest')->group(function() {
        Route::resource('login', Auth\LoginController::class);
        Route::resource('register', Auth\RegisterController::class);
    });
    
    Route::middleware('auth')->group(function() {
        Route::resource('logout', Auth\LogoutController::class);
    });
    
    // Default Page
    Route::prefix('page')->group(function() {
        Route::middleware('auth')->group(function() {
            // Dashboard Web Route
            Route::prefix('main')->group(function() {
                Route::resource('task', Main\TaskController::class);
                Route::resource('statistic', Main\DashboardController::class);  
            });

            // Setting Web Route
            Route::prefix('setting')->group(function() {
                Route::resource('profile', Setting\ProfileController::class);
            });
            
            // Admin Web Route
            Route::prefix('admin')->group(function() {
                Route::resource('account', Admin\AccountController::class, ['names' => 'akun']);
                Route::resource('role', Admin\RoleController::class);
            });

            // System Web Route
            Route::prefix('system')->group(function() {
                Route::prefix('sidebar')->group(function() {
                    Route::resource('menu', System\MenuController::class);
                    Route::resource('page', System\PageController::class);
                    Route::resource('category', System\CategoryController::class);
                });
                
                Route::resource('translate', System\TranslateController::class);
                Route::resource('personalization', System\ApplicationController::class, ['names' => 'application']);
            });

            // Audit Web Route
            Route::prefix('audit')->group(function() {
                Route::resource('auth', Audit\AuthController::class);
                Route::resource('model', Audit\ModelController::class);
                Route::resource('system', Audit\SystemController::class);
                Route::resource('query', Audit\QueryController::class);
            });
        });
    });
});