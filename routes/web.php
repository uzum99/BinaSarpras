<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AduanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//SISWA
Route::get('home', [SiswaController::class, 'home'])->name('home');
Route::get('about', [SiswaController::class, 'about'])->name('about');
Route::get('tiket-aduan', [SiswaController::class, 'tiket'])->name('tiket-aduan');

Route::resource('aduan', AduanController::class);

Route::get('login', [LoginController::class, 'login'])->name('login');

Route::get('register', [RegisterController::class, 'register'])->name('register');

Route::resource('admin', AdminController::class);