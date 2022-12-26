<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MagangController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PembimbingController;

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

Route::get('/', [MainController::class, 'index']);
Route::get('/detailmagang/{id}', [MainController::class, 'detail']);

Auth::routes();

// admin
Route::get('/admin', [AdminController::class, 'index'])->middleware('auth')->name('admin.index');
// Route::get('/admin/magang', [MagangController::class, 'index'])->middleware('auth')->name('admin.magang.index');
// Route::get('/admin/magang/create', [MagangController::class, 'create'])->name('admin.magang.create')->middleware('auth');
// Route::post('/admin/magang', [MagangController::class, 'store'])->name('admin.magang.store')->middleware('auth');

Route::resource('/admin/magang', MagangController::class);
Route::resource('/admin/pembimbing', PembimbingController::class);
Route::resource('/admin/mahasiswa', MahasiswaController::class);
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

