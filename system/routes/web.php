<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Authcontroller;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\FontController;
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
    return view('fontend.home');
});

Route::get('about', [FontController::class, 'showAbout']);
Route::get('home', [FontController::class, 'showHome']);
Route::get('product', [FontController::class, 'showProduct']);

Route::get('template', function () {
    return view('template.base');
});


Route::get('/beranda', [HomeController::class, 'showberanda']);

Route::get('produk', [Produkcontroller::class, 'index']);
Route::get('produk/create', [Produkcontroller::class, 'create']);
Route::post('produk', [Produkcontroller::class, 'store']);
Route::get('produk/{produk}', [Produkcontroller::class, 'show']);
Route::get('produk/{produk}/edit', [Produkcontroller::class, 'edit']);
Route::put('produk/{produk}', [Produkcontroller::class, 'update']);
Route::delete('produk/{produk}', [Produkcontroller::class, 'destroy']);

Route::get('login', [AuthController::class, 'showlogin']);
