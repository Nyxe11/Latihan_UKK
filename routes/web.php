<?php

use App\Http\Controllers\barangcontroller;
use App\Http\Controllers\LatihanUkkController;
use App\Http\Controllers\transaksicontroller;
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
});

route::resource('barang', barangcontroller::class);
route::resource('transaksi', transaksicontroller::class)->only(['index', 'create', 'store', 'destroy',]);