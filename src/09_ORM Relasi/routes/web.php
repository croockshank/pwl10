<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Http\Request;
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
  return view('welcome');
});
Route::resource('mahasiswas', MahasiswaController::class);
Route::get('cari', [App\Http\Controllers\MahasiswaController::class, 'cari'])->name('mahasiswas.cari');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('mahasiswas', [MahasiswaController::class, 'nilai'])->name('mahasiswas.nilai');