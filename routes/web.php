<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;

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

Route::get('/', [LoginController::class, 'login'])->name('auth.login');
Route::post('/', [LoginController::class, 'process'])->name('auth.login-process');
Route::get('logout', [LoginController::class, 'logout'])->name('auth.logout');

Route::get('home', [HomeController::class, 'index'])->name('home.index');
