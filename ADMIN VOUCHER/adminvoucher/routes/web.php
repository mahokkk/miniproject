<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\VoucherController;
use App\Http\Controllers\LarisController;
use App\Http\Controllers\BajuController;
use App\Http\Controllers\JaketController;
use App\Http\Controllers\HoodieController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\konfirmasiController;
use App\Http\Controllers\TolakController;
use App\Http\Controllers\tableController;

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

// DASHBOARD

Route ::get('/',[tableController::class,'orang'])->name('dashboard');

// DATA VOUCHER

Route::get('/voucher',[VoucherController::class, 'index'])->name('voucher');

Route::get('/tambahvoucher',[VoucherController::class, 'tambahvoucher'])->name('tambahvoucher');
Route::post('/insertdata',[VoucherController::class, 'insertdata'])->name('insertdata');

Route::get('/tampildata/{id}',[VoucherController::class, 'tampildata'])->name('tampildata');
Route::post('/updatedata/{id}',[VoucherController::class, 'updatedata'])->name('updatedata');

Route::get('/delete/{id}',[VoucherController::class, 'delete'])->name('delete');

// VOUCHER LARIS

Route::get('/laris',[LarisController::class, 'index'])->name('laris');

Route::get('/tambahlaris',[LarisController::class, 'tambahlaris'])->name('tambahlaris');
Route::post('/insert',[LarisController::class, 'insert'])->name('insert');

// KATEGORI

Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori');

// LOGIN

Route::get('/login',[LoginController::class, 'login'])->name('login');

// KONFIRMASI

Route::get('/konfirmasi',[konfirmasiController::class, 'index'])->name('konfirmasi');

// TOLAK

Route::get('/tolak',[TolakController::class, 'index'])->name('tolak');

Route::get('/tampil/{id}',[TolakController::class, 'tampil'])->name('tampil');
Route::post('/update/{id}',[TolakController::class, 'update'])->name('update');

Route::get('/hapus/{id}',[TolakController::class, 'hapus'])->name('hapus');

// chart

Route::get('/pie-chart', 'ChartController@pieChart');
