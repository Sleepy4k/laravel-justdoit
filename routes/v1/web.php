<?php

use App\Http\Controllers\Page\Auth;
use App\Http\Controllers\Page\Main;
use App\Http\Controllers\Page\Admin;
use App\Http\Controllers\Page\System;

/*
|--------------------------------------------------------------------------
| Web V1 Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
| Admin Route
*/
Route::resource('role', Admin\RoleController::class);
Route::resource('account', Admin\AccountController::class);

/*
| Audit Route
*/
Route::resource('auth', Audit\AuthController::class);
Route::resource('model', Audit\ModelController::class);
Route::resource('system', Audit\SystemController::class);
Route::resource('query', Audit\QueryController::class);

/*
| Auth Route
*/
Route::middleware('guest')->group(function() {
    Route::resource('login', Auth\LoginController::class);
    Route::resource('register', Auth\RegisterController::class);
});

Route::middleware('auth')->group(function() {
    Route::resource('logout', Auth\LogoutController::class);
});

/*
| Dashboard Route
*/
Route::resource('dashboard', Main\DashboardController::class);

/*
| Task Route
*/
Route::resource('task', Main\TaskController::class);

/*
| Sidebar Route
*/
Route::prefix('sidebar')->group(function() {
    Route::resource('menu', System\MenuController::class);
    Route::resource('page', System\PageController::class);
    Route::resource('category', System\CategoryController::class);
});

/*
| System Route
*/
Route::resource('translate', System\TranslateController::class);
Route::resource('personalization', System\ApplicationController::class, ['names' => 'application']);