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
Route::get('/', function () {
    return view('website.index');
});

use App\Http\Controllers\Akun;

//Route:: get('/post', [PostingController::class, 'index']) ;

Route:: resource('post', Akun::class);

Route:: get('/daftar', [PostingController::class, 'daftar']);

/* gak harus id, terserah bisa*/