<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\produkController;
use App\Http\Controllers\tentangkamiController;
use App\Http\Controllers\kontakController;
use App\Http\Controllers\akunController;
use App\Http\Controllers\berandaControllerController;



Route::get('/', function () {
    return view('welcome');
});


Route::view('/produk', 'landing.produk')->name('produk');
Route::view('/tentangkami', 'landing.tentangkami')->name('tentangkami');
Route::view('/kontak', 'landing.kontak')->name('kontak');
Route::view('/akun', 'landing.akun')->name('akun');
Route::view('/beranda', 'landing.beranda')->name('beranda');

