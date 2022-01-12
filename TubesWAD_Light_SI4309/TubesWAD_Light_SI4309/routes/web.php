<?php

use App\Http\Controllers\LoginController;
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

Route::get('/', [LoginController::class, 'index']);
Route::post('/', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout']);



// Route::post('/postlogin', 'LoginController@postlogin')->name('postlogin');
Route::post('/home', function () {
    return view('home', [
        "title" => "home"
    ]);
});
Route::get('/home', function () {
    return view('home', [
        "title" => "home"
    ]);
});
Route::get('/stock', function () {
    return view('stok', [
        "title" => "stok"
    ]);
});
Route::get('/pembelian', function () {
    return view('pembelian', [
        "title" => "pembelian"
    ]);
});
Route::get('/pangkalan', function () {
    return view('pangkalan', [
        "title" => "pangkalan"
    ]);
});
Route::get('/riwayat', function () {
    return view('riwayat', [
        "title" => "riwayat"
    ]);
});
