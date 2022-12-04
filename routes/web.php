<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\Admin;
use App\Http\Controllers\Mahasiswa;
use App\Http\Controllers\UserController;
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
Route::get('/', [LayoutController::class, 'index'])->middleware('auth');
Route::get('home', [LayoutController::class, 'index'])->middleware('auth');

// Logn Route
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login/proses', [LoginController::class, 'proses']);
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['checkUserLogin:1']], function () {

        //Pengelolaan Pengguna 

        // Show Pengguna
        Route::get('admin/showPengguna', [UserController::class, 'index'])->name('show.user');

        // Add Pengguna
        Route::get('admin/user-add', [UserController::class, 'create'])->name('add.user');
        Route::post('admin/user-add-process', [UserController::class, 'addProcess'])->name('add.process.user');

        // Edit Pengguna
        Route::get('admin/user-edit/{id}', [UserController::class, 'edit'])->name('edit.user');
        Route::post('admin/user-edit-process/{id}', [UserController::class, 'editProcess'])->name('process.user.edit');

        // Delete Pengguna
        Route::get('admin/user-delete/{id}', [UserController::class, 'delete'])->name('delete.user');
    });

    Route::group(['middleware' => ['checkUserLogin:6']], function () {
        Route::get('mahasiswa', [Mahasiswa::class, 'index']);
    });
});

Route::prefix('admin')->group(function() {
    Route::resource('sekolah', SekolahController::class, [
        'names' => [
            'index' => 'sekolah.index',
            'show' => 'sekolah.show',
            'store' => 'sekolah.store',
            'create'=> 'sekolah.create',
            'edit'=> 'sekolah.edit',
            'update'=> 'sekolah.update',
            'destroy'=> 'sekolah.destroy'
            ]
    ]);
});