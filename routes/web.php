<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AduanController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ManageAdminController;
use App\Http\Controllers\SiswaController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [SiswaController::class, 'home'])->name('home');
//Route::get('/', [LoginController::class, 'login'])->name('login');

//SISWA
Route::get('home', [SiswaController::class, 'home'])->name('home');
Route::get('about', [SiswaController::class, 'about'])->name('about');

Route::resource('aduan', AduanController::class);
Route::get('/aduan-sukses/{id}', [AduanController::class, 'sukses'])->name('aduan.sukses');
Route::post('/aduan/lacak', [AduanController::class, 'lacak'])->name('aduan.lacak');

Route::get('login', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');


Route::resource('kategori', KategoriController::class);
Route::resource('user', ManageAdminController::class);
Route::get('dashboard', [HomeController::class, 'index'])->name('dashboard');                                                                               

Route::middleware(['auth'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

        Route::get('/', [AdminController::class, 'index'])->name('index');
        Route::get('/{id}', [AdminController::class, 'show'])->name('show');

        Route::put('/{id}/status', [AdminController::class, 'updateStatus'])->name('status');
        Route::post('/{id}/feedback', [AdminController::class, 'storeFeedback'])->name('feedback');
});
