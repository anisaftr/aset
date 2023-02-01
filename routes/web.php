<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FormulirController;

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

Route::get('/', function () {
    return view('User/login-user');
});


Route::get('/login', [LoginController::class, 'userlogin'])->name('userlogin');
Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

 Route::group(['middleware' => ['auth:user,admin']], function () {
    Route::get('/form-data', [FormController::class, 'create'])->name('form-data');
    Route::post('/form-simpan', [FormController::class, 'store'])->name('form-simpan');


    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/user-data', [DashboardController::class, 'userdata'])->name('user-data');
    Route::get('/home', [DashboardController::class, 'home'])->name('home');

    Route::get('/data-barang', [DataController::class, 'index'])->name('data-barang');
    Route::get('/create-data', [DataController::class, 'create'])->name('create-data');
    Route::post('/simpan-data', [DataController::class, 'store'])->name('simpan-data');
    Route::get('/edit-data/{id}', [DataController::class, 'edit'])->name('edit-data');
    Route::post('/update-data/{id}', [DataController::class, 'update'])->name('update-data');
    Route::get('/delete-data/{id}', [DataController::class, 'destroy'])->name('delete-data');
    Route::get('/form-admin', [FormController::class, 'index'])->name('form-admin');
    Route::get('/setuju/{id}', [FormController::class, 'approved'])->name('setuju');
    Route::get('/tidaksetuju/{id}', [FormController::class, 'decline'])->name('tidaksetuju');
    Route::get('/exportdata', [DataController::class, 'dataexport'])->name('exportdata');
    Route::post('/importdata', [DataController::class, 'dataimportexcel'])->name('importdata');

    Route::get('/cetak-pinjam', [FormController::class, 'cetakPinjam'])->name('cetak-pinjam');
    Route::get('/cetak-kembali', [FormulirController::class, 'cetakKembali'])->name('cetak-kembali');

    Route::get('/form-kembali', [FormulirController::class, 'create'])->name('form-kembali');
    Route::post('/formkembali-simpan', [FormulirController::class, 'store'])->name('formkembali-simpan');
    Route::get('/formkembali-admin', [FormulirController::class, 'index'])->name('formkembali-admin');
    Route::get('/terima/{id}', [FormulirController::class, 'approved'])->name('terima');

});
