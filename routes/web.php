<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\Admin;
use App\Http\Controllers\Mahasiswa;
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

// Route::get('/', function () {
//     return view('auth.login');
// });
Route::get('/', [LoginController::class, 'index']);
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login/proses', [LoginController::class, 'proses']);
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['checkUserLogin:1']], function () {
        Route::get('admin', [Admin::class, 'index']);
    });

    Route::group(['middleware' => ['checkUserLogin:6']], function () {
        Route::get('mahasiswa', [Mahasiswa::class, 'index']);
    });
});


// Route::controller(LoginController::class)->group(function () {
//     Route::get('login', 'index')->name('login');
//     Route::post('login/proses', 'proses');
// });
