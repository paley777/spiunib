<?php

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

//Landing
Route::get('/', [LandingController::class, 'index']);
Route::get('/report', [LandingController::class, 'report']);
Route::get('/news', [LandingController::class, 'news']);
Route::get('/profile', [LandingController::class, 'profile']);
//upload report whistleblower
Route::post('/report/create', [LandingController::class, 'storereport']);
//Details News
Route::get('/news/details/1', [LandingController::class, 'newsdetails']);