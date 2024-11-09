<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FrontendController;
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

Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::get('/details/{slug}', [FrontendController::class, 'show'])->name('show');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerFoundation'])->name('register-foundation');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'AuthLogin'])->name('auth-login');
Route::get('/dashboard/{slug}', [AuthController::class, 'dashboard'])->name('dashboard');
Route::post('/logo', [AuthController::class, 'AuthLogo'])->name('auth-logo');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
