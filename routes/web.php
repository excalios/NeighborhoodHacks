<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', LandingController::class)->name('landing_page');

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/signup', [AuthController::class, 'signup'])->name('signup');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/signin', [AuthController::class, 'signin'])->name('signin');

Route::get('/dashboard', DashboardController::class)->middleware('auth')->name('dashboard');
Route::get('/detail', [InfoController::class, 'index'])->middleware('auth')->name('detail');
