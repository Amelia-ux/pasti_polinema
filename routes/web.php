<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RelationController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\WorkplanController;
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

//home
Route::get('/', [HomeController::class, 'index']);
Route::get('/tentang', [HomeController::class, 'tentang']);
Route::get('/proker', [HomeController::class, 'proker']);
Route::get('/struktur', [HomeController::class, 'struktur']);
Route::get('/kontak', [HomeController::class, 'kontak']);

//login
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticated']);
Route::get('/logout', [AuthController::class, 'logout']);

//dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

//admin
Route::resource('/about', AboutController::class)->middleware('auth');
Route::resource('/team', TeamController::class)->middleware('auth');
Route::resource('/workplan', WorkplanController::class)->middleware('auth');
Route::resource('/relation', RelationController::class)->middleware('auth');