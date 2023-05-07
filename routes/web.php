<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\penggunaController;
use App\Http\Controllers\barangController;
use App\Http\Controllers\hakAksesController;
use App\Http\Controllers\pelangganController;
use App\Http\Controllers\penjualanController;
use App\Http\Controllers\supplierController;
use App\Http\Controllers\pembelianController;

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
    return redirect('/dashboard');
});

Route::get('/dashboard', [dashboardController::class, 'dashboard']);
Route::get('pengguna', [penggunaController::class, 'index']);
Route::get('/tambahPengguna', [penggunaController::class, 'tambahPengguna']);
Route::post('/insertPengguna', [penggunaController::class, 'insertPengguna']);
Route::get('/editPengguna/{id}', [penggunaController::class, 'editPengguna']);
Route::post('/updatePengguna', [penggunaController::class, 'updatePengguna']);
Route::get('/deletePengguna/{id}', [penggunaController::class, 'deletePengguna']);

Route::get('/barang', [barangController::class, 'index']);
Route::get('/tambahBarang', [barangController::class, 'tambahBarang']);
Route::post('/insertBarang', [barangController::class, 'insertBarang']);
Route::get('/editBarang/{id}', [barangController::class, 'editBarang']);
Route::post('/updateBarang', [barangController::class, 'updateBarang']);
Route::get('/deleteBarang{id}', [barangController::class, 'deleteBarang']);

Route::get('/hakAkses', [hakAksesController::class, 'index']);
Route::get('/tambahHakAkses', [hakAksesController::class, 'tambahHakAkses']);
Route::post('/insertHakAkses', [hakAksesController::class, 'insertHakAkses']);
Route::get('/editHakAkses/{id}', [hakAksesController::class, 'editHakAkses']);
Route::post('/updateHakAkses', [hakAksesController::class, 'updateHakAkses']);
Route::get('/deleteHakAkses/{id}', [hakAksesController::class, 'deleteHakAkses']);

Route::get('/pelanggan', [pelangganController::class, 'index']);
Route::get('/tambahPelanggan', [pelangganController::class, 'tambahPelanggan']);
Route::post('/insertPelanggan', [pelangganController::class, 'insertPelanggan']);
Route::get('/editPelanggan/{id}', [pelangganController::class, 'editPelanggan']);
Route::post('/updatePelanggan', [pelangganController::class, 'updatePelanggan']);
Route::get('/deletePelanggan/{id}', [pelangganController::class, 'deletePelanggan']);

Route::get('/penjualan', [penjualanController::class, 'index']);
Route::get('/tambahPenjualan', [penjualanController::class, 'tambahPenjualan']);
Route::post('/insertPenjualan', [penjualanController::class, 'insertPenjualan']);
Route::post('/beliPaket', [penjualanController::class, 'beliPaket']);

Route::get('/supplier', [supplierController::class, 'index']);
Route::get('/tambahSupplier', [supplierController::class, 'tambahSupplier']);
Route::post('insertSupplier', [supplierController::class, 'insertSupplier']);

Route::get('/pembelian', [pembelianController::class, 'index']);
Route::get('/tambahPembelian', [pembelianController::class, 'tambahPembelian']);
Route::post('/insertPembelian', [pembelianController::class, 'insertPembelian']);