<?php

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

Route::view('/', 'guest.beranda.index')->name('guest.beranda.index');
Route::view('/visi-misi', 'guest.visi-misi.index')->name('guest.visi-misi.index');
Route::view('/struktur-organisasi', 'guest.struktur-organisasi.index')->name('guest.struktur-organisasi.index');
Route::view('/dokumen-publik', 'guest.dokumen-publik.index')->name('guest.dokumen-publik.index');
Route::view('/lokasi-penting', 'guest.lokasi-penting.index')->name('guest.lokasi-penting.index');
Route::view('/artikel', 'guest.artikel.index')->name('guest.artikel.index');

