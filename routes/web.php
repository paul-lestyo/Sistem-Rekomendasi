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

Route::get('/', fn () => view('home'))->name('home');
Route::get('/rekomendasi', fn () => view('rekomendasi'))->name('rekomendasi');
Route::get('/detail-wisata', fn () => view('detail-wisata'))->name('detail-wisata');