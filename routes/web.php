<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NewsController;

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

//Landing
Route::get('/', [LandingController::class, 'index']);
Route::get('/report', [LandingController::class, 'report']);
Route::get('/news', [LandingController::class, 'news']);
Route::get('/profile', [LandingController::class, 'profile']);
//upload report whistleblower
Route::post('/report/create', [LandingController::class, 'storereport']);

//Details News
Route::post('/spi/details', [LandingController::class, 'newsdetails']);

//login
Route::get('/login', [LandingController::class, 'login']);
Route::post('/login', [LandingController::class, 'authenticate'])->name('login');
//logout
Route::post('/logout', [DashboardController::class, 'logout'])->middleware('auth');
//Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::get('/dashboard/profile', [DashboardController::class, 'profile'])->middleware('auth');
Route::resource('/dashboard/reports', ReportController::class)->middleware('auth');
Route::resource('/dashboard/users', UserController::class)->middleware('auth');
Route::resource('/dashboard/news', NewsController::class)->middleware('auth');
//print
Route::post('/dashboard/reports/print', [ReportController::class, 'print'])->middleware('auth');
Route::post('/dashboard/reports/printall', [ReportController::class, 'printall'])->middleware('auth');
