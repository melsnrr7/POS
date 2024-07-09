<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('login');
// });

// bisa pake cara ini, tapi di atasnya harus ada use ...
// Route::get('/', [LoginController::class, 'index']);
// atau ini
Route::get('/', [\App\Http\Controllers\LoginController::class, 'index']);
Route::get('register', [\App\Http\Controllers\LoginController::class,  'register']);
Route::post('actionRegister', [\App\Http\Controllers\LoginController::class, 'actionRegister'])->name('actionRegister');
Route::post('actionLogin', [\App\Http\Controllers\LoginController::class, 'actionLogin'])->name('actionLogin');

Route::resource('home', HomeController::class);
Route::resource('category', CategoryController::class);
Route::resource('barang', BarangController::class);
