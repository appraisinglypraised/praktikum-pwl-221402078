<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\Admincontroller;

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
    return view('dashboard');
});

// Route::get('/daftar_mahasiswa', 'App\Http\Controllers\MahasiswaController@index');
//Route::get ('/daftar_mahasiswa', [MahasiswaController::class,'index']); // --> versi lebih singkat
// Route::post ('/detail_mahasiswa', [MahasiswaController::class,'detail_mhs']);

//Route::match(['get', 'post'], '/detail_mahasiswa', [MahasiswaCOntroller::class, 'detail_mhs']); {
    // 
//};

Route::post('/detail_mahasiswa', [MahasiswaController::class,'daftar_kekayaan']);
Route::get('/detail_mahasiswa/daftar_kekayaan/daftar_kendaraan', [MahasiswaController::class,'daftar_kekayaan']) ->name('one');
Route::view('/daftar_mahasiswa', 'daftar_mahasiswa/daftar_properti');

Route::get('/admin/dashboard', [AdminController::class, 'index']);
Route::get('/admin/postingan', [AdminController::class, 'show_postingan']);
Route::get('/admin/arsip', [AdminController::class, 'show_arsip']);
Route::get('/admin/aboutus', [AdminController::class, 'show_aboutus']);
Route::get('/admin/help', [AdminController::class, 'show_help']);
Route::get('/admin/products', [AdminController::class, 'show_products']);
Route::get('/admin/launches', [AdminController::class, 'show_launches']);