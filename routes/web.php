<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ikController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\MenuAksesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');

    // if session('auth)['user_id'] == null | isset(session('auth)['user_id']) == false
    // redirect(route('login'))

});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/ik', [ikController::class, 'index'])->name('ik');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.store');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::resource('menu-akses', MenuAksesController::class);
Route::resource('karyawans', KaryawanController::class)->names('karyawans');
Route::resource('ik', ikController::class);
