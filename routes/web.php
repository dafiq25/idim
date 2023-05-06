<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\penggunaController;
use App\Http\Controllers\barangController;

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
Route::get('/barang', [barangController::class, 'index']);