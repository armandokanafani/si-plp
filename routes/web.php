<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\Admin;
use App\Http\Controllers\Mahasiswa;
use App\Http\Controllers\PendataanController;
use App\Http\Controllers\SekolahController;
use App\Http\Controllers\UserController;
use App\Sekolah;
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
Route::get('/', [LayoutController::class, 'index'])->middleware('auth')->name('home');
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
        // Route::get('admin/showPengguna/admin', [UserController::class, 'admin']);

        // Add Pengguna
        Route::get('admin/user-add', [UserController::class, 'create'])->name('add.user');
        Route::post('admin/user-add-process', [UserController::class, 'addProcess'])->name('add.process.user');

        // Edit Pengguna
        Route::get('admin/user-edit/{id}', [UserController::class, 'edit'])->name('edit.user');
        Route::post('admin/user-edit-process/{id}', [UserController::class, 'editProcess'])->name('process.user.edit');

        // Delete Pengguna
        Route::get('admin/user-delete/{id}', [UserController::class, 'delete'])->name('delete.user');

        // Pengelolaan Sekolah

        // Show Pengguna
        Route::get('admin/showSekolah', [SekolahController::class, 'index'])->name('sekolah.index');

        // Add Sekolah
        Route::get('admin/sekolah-add', [SekolahController::class, 'create'])->name('add.sekolah');
        Route::post('admin/sekolah-add-process', [SekolahController::class, 'addProcess'])->name('add.process.sekolah');

        // Edit Sekolah
        Route::get('admin/sekolah-edit/{id}', [SekolahController::class, 'edit'])->name('edit.sekolah');
        Route::post('admin/sekolah-edit-process/{id}', [SekolahController::class, 'editProcess'])->name('process.sekolah.edit');

        // Delete Sekolah
        Route::get('admin/sekolah-delete/{id}', [SekolahController::class, 'delete'])->name('delete.sekolah');

        // Pengelolaan Pendataan

        // Show Pendataan
        Route::get('admin/showPendataan', [PendataanController::class, 'index'])->name('show.pendataan.admin');

        // Edit Pendataan
        Route::get('admin/pendataan-edit/{id}', [PendataanController::class, 'edit'])->name('edit.pendataan.admin');
        Route::post('admin/pendataan-edit-process/{id}', [PendataanController::class, 'editProcess'])->name('process.pendataan.edit');

        // Delete Pendataan
        Route::get('admin/pendatan-delete/{id}', [PendataanController::class, 'delete'])->name('delete.pendataan');
    });

    Route::group(['middleware' => ['checkUserLogin:2']], function () {
        // Show Pendataan
        Route::get('kaprodi/showPendataan', [PendataanController::class, 'index'])->name('show.pendataan.kaprodi');
    });

    Route::group(['middleware' => ['checkUserLogin:3']], function () {
    });

    Route::group(['middleware' => ['checkUserLogin:4']], function () {
        // Validasi Pendataan

        // Show Pendataan
        Route::get('koordinator/showPendataan', [PendataanController::class, 'indexKoor'])->name('show.pendataan.koor');

        // Edit Pendataan
        Route::get('koordinator/pendataan-edit/{id}', [PendataanController::class, 'editKoor'])->name('edit.pendataan.koor');
        Route::post('koordinator/pendataan-edit-process/{id}', [PendataanController::class, 'editKoorProcess'])->name('process.pendataan.koor');
    });

    Route::group(['middleware' => ['checkUserLogin:5']], function () {
        // Validasi Pendataan

        // Show Pendataan
        Route::get('Pamong/showPendataan', [PendataanController::class, 'indexPamong'])->name('show.pendataan.pamong');

        // Edit Pendataan
        Route::get('pamong/pendataan-edit/{id}', [PendataanController::class, 'editPamong'])->name('edit.pendataan.pamong');
        Route::post('pamong/pendataan-edit-process/{id}', [PendataanController::class, 'editPamongProcess'])->name('process.pendataan.pamong');
    });

    Route::group(['middleware' => ['checkUserLogin:6']], function () {
        Route::get('mahasiswa/pendataan-add', [PendataanController::class, 'create'])->name('add.pendataan');
        Route::post('mahasiwa/pendataan-add-process', [PendataanController::class, 'addProcess'])->name('add.process.pendataan');
    });
});
